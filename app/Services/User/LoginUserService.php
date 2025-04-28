<?php 

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUserService 
{
    public function login(array $credentials)
    {
        $user = User::where("email", $credentials["email"])->first();
        
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            throw new \Exception("Credenciais inválidas");
        }

        Auth::login($user);

        return $user;
    }
}