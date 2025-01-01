<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LanguageController extends Controller
{
    public static array $supportedLanguages = [
        "en",
        "ro"
    ];

    public function setLanguage(string $language, Request $request): RedirectResponse
    {
        // Validate the requested language
        $validator = Validator::make(
            ['language' => $language],
            ['language' => ['required', Rule::in(self::$supportedLanguages)]]
        );
        $validated = $validator->validated();

        // Save the language preference in the session
        $request->session()->put(['language' => $validated['language']]);

        return redirect()->back();
    }
}
