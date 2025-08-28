<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\throwException;
use Illuminate\Validation\ValidationException;

class SessionUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attrebutes = request()->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attrebutes)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials',
            ]);
        }

        session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
