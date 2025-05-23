<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialHandleController extends Controller
{
        public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }



public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $existingUser = User::where('email', $googleUser->getEmail())->first();

    if ($existingUser) {
        Auth::login($existingUser);
    } else {
        // Generate a unique username
        $baseUsername = Str::slug($googleUser->getName());
        $username = $baseUsername;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $baseUsername . $counter++;
        }

        $newUser = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'username' => $username,
            'password' => Hash::make(Str::random(16)), // optional dummy password
        ]);

        Auth::login($newUser);
    }

    return redirect()->intended('/home');
}

}
