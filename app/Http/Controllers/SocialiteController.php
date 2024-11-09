<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    // Redirect to Google for authentication
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle the callback from Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            // dd($googleUser);
        } catch (\Exception $e) {
            \Log::error('Google login error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Google login failed.');
        }
        if ($googleUser->getEmail() == 'isbdigitalinovation@gmail.com') {
            // Check if the user exists, otherwise create a new user
            $user = User::firstOrCreate([
                'email' => $googleUser->getEmail(),
            ], [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
            ]);

            // Log the user in
            Auth::login($user, true);
            // Redirect the user to the desired page after login
            //dd(Auth::check(), Auth::user());
            return redirect('/admin-home'); // Or your preferred route
        } else {
            // If the email is not allowed, you can redirect with an error message
            return redirect('/')->with('error', 'Only admin can sign in.');
        }
    }
}
