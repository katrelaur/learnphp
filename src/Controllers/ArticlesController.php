<?php
namespace App\Controllers;

use App\DB;
use App\Models\Article;

class ArticlesController {

    public function index(){
        $articles = Article::all();
        include 'views/articles/index.php';
    }

    public function create(){
        include 'views/articles/create.php';
    }

    public function store(){
        $article = new Article();
        $article ->title = $_POST['title'];
        $article -> body = $_POST['body'];
        $article ->save();
        var_dump($_GET);
        var_dump($_POST);
    }
}