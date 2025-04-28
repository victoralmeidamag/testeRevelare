<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\LoginUserService;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            $user = (new LoginUserService())->login($credentials);
            return redirect()->route("online.home")->with("success","Bem vindo, $user->name");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
