<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login page.
     * Not protected.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle login submit.
     * Not protected.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (! Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('students.index'));
    }

    /**
     * Register page.
     * Protected by auth from routes/web.php.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store new user.
     * Protected by auth from routes/web.php.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        User::create($data);

        return redirect()
            ->route('students.index')
            ->with('success', 'User registered successfully.');
    }

    /**
     * Password change page.
     * Protected by auth from routes/web.php.
     */
    public function edit()
    {
        return view('auth.change-password');
    }

    /**
     * Update current user's password.
     * Protected by auth from routes/web.php.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = $request->user();

        if (! Hash::check($data['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }

        $user->update([
            'password' => $data['password'],
        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Password changed successfully.');
    }

    /**
     * Logout.
     * Protected by auth from routes/web.php.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
