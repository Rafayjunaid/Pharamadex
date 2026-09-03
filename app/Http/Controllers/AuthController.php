<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('Auth.login');
    }

   public function login(Request $request)
{
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $data['email'])->first();

    if (!$user || $data['password'] !== $user->password) {
        return view('Errors.LoginError');
    }

    $request->session()->regenerate();

    session([
        'user_id' => $user->id,
        'user_role' => $user->role,
    ]);
    if ($user->role === 'admin') {
        return redirect()->route('admin.manage');
    }
    
    if ($user->status === 'blocked') {
        session()->flush();
        return redirect('/blocked');
    }
    if ($user->role === 'staff') {
        return redirect('/Medicine_Sold');
    }

    $request->session()->flush();

    return redirect('/loginPage');
}
}