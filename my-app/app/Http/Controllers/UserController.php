<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ], [
            'email.required' => 'Pole e-mail jest wymagane.',
            'email.email' => 'Pole e-mail musi być poprawnym adresem e-mail.',
            'password.required' => 'Pole hasło jest wymagane.',
        ]);
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }else
        {
            return back()->withErrors(['email' => 'Błędne dane'])->onlyInput('email');
        }
    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
