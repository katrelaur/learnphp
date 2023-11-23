<?php
namespace App\Controllers;

use App\Models\Article;

class PublicController {
    public function index(){
        $articles = Article::all();
        include 'views/index.php';
    }

    public function about(){
        include 'views/about.php';
    }

    public function contacts(){
        include 'views/contacts.php';
    }
}