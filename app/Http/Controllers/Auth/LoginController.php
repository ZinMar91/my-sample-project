<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Exceptions\NoActiveAccountException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /*private function checkStatusLevel()
    {
        if (!Auth::user()->isActiveStatus()) {
            Auth::logout();
            throw new NoActiveAccountException;
        }
    }*/

    /*public function redirectPath()
    {
        if (Auth::user()->isAdmin()) {
            return 'admin';
        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }*/

    /** * Handle a login request to the application. * * @param \Illuminate\Http\Request $request * @return \Illuminate\Http\Response */
    /*public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $credentials = $this->credentials($request);
        if ($this->guard()->attempt($credentials, $request->has('remember'))) {
            $this->checkStatusLevel();
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }*/
}

