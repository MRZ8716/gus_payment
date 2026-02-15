<?php

namespace App\Http\Modules\Authentication\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Modules\Authentication\models\Authentication_m;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function index()
    {
        return view('authentication::authentication_v');
    }

    public function login(Request $request)
    {
        $user = Authentication_m::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Login gagal');
        }

        session(['user_id' => $user->id]);
        return redirect('/dashboard');
    }
}
