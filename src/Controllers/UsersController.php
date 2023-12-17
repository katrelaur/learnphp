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

    public function show(){
        $user = User::find($_GET['id']);
        include 'views/users/show.php';
    }

    public function edit(){
        $user = User::find($_GET['id']);
        include 'views/users/edit.php';
    }

    public function update(){
        $user = User::find($_GET['id']);
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        header('Location: /admin/users');
    }

    public function destroy(){
        $user = User::find($_GET['id']);
        $user->delete();
        header('Location: /admin/users');
    }
}