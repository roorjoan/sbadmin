<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' =>       ['required', 'string', 'min:2'],
            'last_name' =>  [],
            'email' =>      ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' =>   ['required', 'confirmed', Password::defaults()]
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return to_route('login')->with('status', 'User created!');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' =>      ['required', 'string', 'email'],
            'password' =>   ['required', 'string']
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        //$this->session()->regenerate();

        return redirect()->intended();
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'You are logged out');
    }
}
