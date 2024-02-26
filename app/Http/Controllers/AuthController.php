<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage(){
        return view("pages.loginPage");
    }

    public function registerPage(){
        return view("pages.registPage");
    }

    public function register(RegisterRequest $registRequest){
    
        $data = $registRequest->validated();

        $user = User::query()->create($data);

        auth()->login($user);

        return redirect()->route("index.index");
    }

    public function login(LoginRequest $loginRequest){

        $data = $loginRequest->validated();

        if(!auth()->attempt($data)){
            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);
        }

        return redirect()->route('index.index');
    }


    public function logout() {

        auth()->logout();

        return redirect()->route('auth.loginPage');

    }

}
