<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return  redirect($this->redirectTo);
        }
        return $this->sendFailedLoginResponse($request);
    }
 protected function validateLogin(Request $request)
    {
        $request->validate([
             'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }
protected function attemptLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        return $this->guard()->attempt(['email' => $email,'password' => $password]);
    }
}
