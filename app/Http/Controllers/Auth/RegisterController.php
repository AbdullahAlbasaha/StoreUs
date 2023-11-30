<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\WelcomeEmailNotification;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->store($request->all());

        $this->guard()->login($user);
        $user->notify(new WelcomeEmailNotification($user));

        return  redirect($this->redirectTo);
    }
    protected function store(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
