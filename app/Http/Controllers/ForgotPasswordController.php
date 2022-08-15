<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 

class ForgotPasswordController extends Controller
{
    public function getEmail()
  {
     return view('email');
  }

 public function postEmail(Request $request)
  {
    $request->validate([
      'email' => 'required|email|exists:users',
    ], [
      'email.required' => 'Masukkan Email anda',
      'email.exists' => 'Email anda tidak terdaftar',
    ]);

    $token = str_random(64);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('verify', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });
      
      toastr()->success('Email anda telah dikirimi link untuk reset password');
      return redirect('email-success');
  }
}
