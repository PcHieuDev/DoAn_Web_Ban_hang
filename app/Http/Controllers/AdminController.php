<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin || !Hash::check($credentials['password'], $admin->password)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials'],
            ]);
        }

        // Đăng nhập thành công
        Auth::guard('web')->login($admin);
        session()->put('ad_name', $admin->ad_name);
        session()->put('adlevel', $admin->adlevel);
        return redirect()->route('user.index');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('loginad');
    }


}
