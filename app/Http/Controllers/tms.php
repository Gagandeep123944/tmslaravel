<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class tms extends Controller
{
    public function signup(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', 
        ]);

        try {
            $hashedPassword = bcrypt($validated['password']);

            $user = User::create([
                'name' => $validated['fullname'],
                'email' => $validated['email'],
                'password' => $hashedPassword,
            ]);

            return response()->json([
                'message' => 'User created successfully!',
                'user' => $user,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create user. Please try again.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user(),
            ], 200);
        }
    
        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/register');
    }
}
