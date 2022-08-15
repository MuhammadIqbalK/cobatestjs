<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]{0,30}$/',
            'email' => 'required|email',
            'password' => 'required|regex:/^[a-zA-Z0-9]{0,15}$/|confirmed',
        ], [
            'name.required' => 'Masukkan nama anda',
            'name.regex' => 'Format nama anda salah',
            'email.required' => 'Masukkan email anda',
            'password.required' => 'Masukkan password anda',
            'password.regex' => 'Format password anda salah',
            'password.confirmed' => 'Password anda tidak sesuai',
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);

        toastr()->success('Daftar akun berhasil');
        return redirect('login');
    }
}
