<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' =>       ['required', 'string', 'min:2'],
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>       ['required', 'string'],
            'email' =>      ['required', 'email'],
            'password' =>   ['required', Password::defaults()]
        ]);

        User::find($id)->update([
            'name' =>       $request->name,
            'last_name' =>  $request->last_name,
            'email' =>      $request->email,
            'password' =>   bcrypt($request->password)
        ]);

        Profile::updateOrCreate([
            'user_id' =>    $id
        ], [
            'address' =>    $request->address,
            'city' =>       $request->city,
            'country' =>    $request->country
        ]);

        return to_route('users.profile')->with('status', 'User updated successfully!');
    }

    public function searchFor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $users = User::where('name', 'LIKE', '%' . $validated . '%')->get();

        return to_route('dashboard', compact('users'));
    }
}
