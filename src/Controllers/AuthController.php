<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function registerForm(){
        include 'views/auth/register.php';
    }

    public function register(){
        var_dump($_POST);
        if($_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
        }
    }

    public function loginForm(){
        
    }

    public function login(){
        
    }

    public function logout(){
        
    }
}