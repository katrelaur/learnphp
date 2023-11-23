<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);

Router::get('/contacts', [PublicController::class, 'contacts']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);

Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);