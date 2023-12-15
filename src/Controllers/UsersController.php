<?php
namespace App\Controllers;

use App\DB;
use App\Models\User;

class UsersController {

    public function index(){
        $users = User::all();
        include 'views/users/index.php';
    }

    public function create(){
        include 'views/users/create.php';
    }

    public function store(){
        $pass = $_POST['password'];
        $confirm = $_POST['password_confirm'];
        if ($pass !== $confirm) {
            die("you fail");
        }
        $user = new User();
        $user ->email = $_POST['email'];
        $user -> password = $pass;
        $user ->save();
        var_dump($_GET);
        var_dump($_POST);
    }
}