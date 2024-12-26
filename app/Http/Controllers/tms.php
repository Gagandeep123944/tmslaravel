<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class tms extends Controller
{
    public function signup(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation
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
}
