<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/"; // o tu dashboard de la tienda

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Redirigir a Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Callback de Facebook
    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();

            $user = User::updateOrCreate(
                ['email' => $facebookUser->getEmail()],
                [
                    'name' => $facebookUser->getName(),
                    'last_name' => '', // Facebook no devuelve apellido separado
                    'password' => bcrypt(Str::random(16)), // contraseña random
                    'phone' => '', // el usuario debe completarlo después
                    'direction' => '',
                    'birthday' => now(), // o null si tu DB lo permite
                    'img' => $facebookUser->getAvatar(),
                    'role' => 'client',
                ]
            );

            Auth::login($user, true);

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect('/login')
                ->withErrors(['facebook_error' => 'Error iniciando sesión con Facebook']);
        }
    }


    // Redirigir a Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback de Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver(driver: 'google')->stateless()->user();

            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'last_name' => '', // Google no devuelve apellido separado
                    'password' => bcrypt(Str::random(16)), // contraseña random
                    'phone' => '', // el usuario debe completarlo después
                    'direction' => '',
                    'birthday' => now(), // o null si tu DB lo permite
                    'img' => $googleUser->getAvatar(),
                    'role' => 'client',
                ]
            );

            Auth::login($user, true);

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['google_error' => 'Error iniciando sesión con Google']);
        }
    }

}
