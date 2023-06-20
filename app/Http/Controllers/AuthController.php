<?php

namespace App\Http\Controllers;

use App\Events\UserRegisteredEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;
class AuthController extends Controller
{
    public function login(){
        return view('Auth/login');
    }
    public function processLogin(Request $request)
    {
        try {
            $user = User::query()
                ->where('email', $request->get('email'))
                ->firstOrFail();

            if (!Hash::check($request->get('password'), $user->password)) {
                throw new Exception('Invalid password');
            }

            session()->put('id', $user->id);
            session()->put('name', $user->name);
            session()->put('avatar', $user->avatar);
            session()->put('level', $user->level);

            return view('home.index')->with('user', $user);
        } catch (Throwable $e) {
            return redirect()->route('login');
        }
    }


    public function logout()
    {
        session()->flush();

        return redirect()->route('home.index');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function processRegister(Request $request)
    {
        $user = User::query()
            ->create([
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'level'    => 0,
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
            ]);
        return redirect()->route('home.index');;
        UserRegisteredEvent::dispatch($user);
    }
}
