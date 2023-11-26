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
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /admin/articles');
    }

    public function show(){
       $article = Article::find($_GET['id']);
       include 'views/articles/show.php';
    }

    public function edit(){
        $article = Article::find($_GET['id']);
        include 'views/articles/edit.php';
    }

    public function update(){
        $article = Article::find($_GET['id']);
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /admin/articles');
    }

    public function destroy(){
        $article = Article::find($_GET['id']);
        $article->delete();
        header('Location: /admin/articles');
    }
}