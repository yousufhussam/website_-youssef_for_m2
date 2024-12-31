<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Enums\AccountStatusEnum;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Validation\Validator
     */
    protected function validator(array $data): \Illuminate\Validation\Validator
    {
        return Validator::make($data, [
            'login' => ['required', 'string', 'min:5', 'max:16', 'unique:account.account'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:account.account'],
            'password' => ['required', 'string', 'min:5', 'max:16'],
            'tac' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return Account
     * @throws \Throwable
     */
    protected function create(array $data): Account
    {
        $account = new Account();
        $account->login = $data['login'];
        $account->email = $data['email'];
        $account->password = Hash::make($data['password']);
        $account->status = AccountStatusEnum::NOT_AVAILABLE;
        $account->saveOrFail();

        return $account;
    }

    /**
     * Executes the registration logic on a validator input
     *
     * @param \Illuminate\Validation\Validator $validator
     * @return RedirectResponse
     * @throws ValidationException
     * @throws \Throwable
     */
    protected function runRegistrationLogic(\Illuminate\Validation\Validator $validator): RedirectResponse
    {
        // Validate the input
        if ($validator->fails()) {
            return redirect('user/register')
                ->withErrors($validator)
                ->withInput($validator->getData());
        }

        // Retrieve the validated input
        $validated = $validator->validated();

        // Attempt to create the account and emit the event
        event(new Registered($user = $this->create($validated)));

        // Authenticate the user
        Auth::guard()->login($user);

        return redirect('user/verification/notice');
    }

    /**
     * Show the application registration form.
     *
     * @return View
     */
    public function showRegistrationForm(): View
    {
        return view('user/registration/register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws \Throwable
     */
    public function register(Request $request): RedirectResponse
    {
        $validator = $this->validator($request->all());
        return $this->runRegistrationLogic($validator);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws \Throwable
     */
    public function registerFromHeader(Request $request): RedirectResponse
    {
        $requestData = $request->all();
        $validator = $this->validator([
            'login' => $requestData['header-form-login'] ?? null,
            'email' => $requestData['header-form-email'] ?? null,
            'password' => $requestData['header-form-password'] ?? null,
            'tac' => $requestData['header-form-tac'] ?? null,
        ]);

        return $this->runRegistrationLogic($validator);
    }
}
