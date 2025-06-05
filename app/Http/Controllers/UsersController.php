<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\students;
use App\Models\productsales;
class UsersController extends Controller
{
public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        $studentId = students::where('email', $request->email)->first();
        $products = productsales::all();
        
        if (Auth::attempt($credentials)) {
            return view('home',['profile'=>$studentId],['product'=>$products]);
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = students::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('/homepage');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function updateProfile(Request $request)
{
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . Auth::user()->id,
        'password' => 'nullable|confirmed|min:6',
    ]);

    $user = Auth::user();
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    if ($user->save()) {
        return redirect('/homepage')->with('success', 'Profile updated successfully!');
    } else {
        return back()->with('error', 'Failed to update profile.');
    }
}

}
