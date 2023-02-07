<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect::back()->withErrors(['message' => 'Email or Password not found!']);
        }

        return redirect()->intended('/contacts');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}