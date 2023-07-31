<?php

namespace App\Http\Controllers\Auth;

use App\Hashing\MySQLHasher;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Enums\AccountStatusEnum;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
     * @param  array  $data
     * @return Account
     */
    protected function create(array $data): Account
    {
        $account = new Account();
        $account->login = $data['login'];
        $account->email = $data['email'];
        $account->password = (new MySQLHasher)->make($data['password']);
        $account->status = AccountStatusEnum::NOT_AVAILABLE;
        $account->saveOrFail();

        return $account;
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
     * @throws ValidationException
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Auth::guard()->login($user);

        return redirect('user/verification/notice');
    }
}
