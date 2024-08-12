<?php

    
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller {
        public function login(): View
        {
            return view('auth.login');
        }
        public function loginPost(Request $request): Response
        {
            $credentials =[
                'email'=> $request->input("email"),
                'password'=>$request->input("password")
            ];
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect(route('camps.view'));
            }

            abort(401, 'Ai gresit datele de autentificare');
        }

        public function registration(): View
        {
            return view('auth.registration');
        }
        public function registrationPost(Request $request) 
        {
            $name=$request->input("name");
            $email=$request->input("email");
            $password=$request->input("password");
            User::query()->create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'is_leader' => false,
                'is_admin' => false
            ]);

            return redirect(route('login'));
        }

        public function logout(Request $request)
        {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect(route('camps.view'));
        }       
    };