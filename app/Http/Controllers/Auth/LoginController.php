<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Get the post login redirect path.
     */
    protected function redirectTo(): string
    {
        return auth()->user()?->role === 'admin' ? '/admin' : '/home';
    }

    /**
     * Force role-based redirect after login (ignores stale intended URLs).
     */
    protected function authenticated(Request $request, $user): RedirectResponse
    {
        return redirect()->to($user->role === 'admin' ? '/admin' : '/home');
    }
}
