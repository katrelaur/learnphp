<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Controllers\UsersController;

use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);

Router::get('/contacts', [PublicController::class, 'contacts']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);

Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);

Router::get('/admin/users', [UsersController::class, 'index']);
Router::get('/admin/users/new', [UsersController::class, 'create']);
Router::post('/admin/users', [UsersController::class, 'store']);

Router::get('/admin/users/show', [UsersController::class, 'show']);

Router::get('/admin/users/edit', [UsersController::class, 'edit']);
Router::post('/admin/users/edit', [UsersController::class, 'update']);

Router::post('/admin/users/delete', [UsersController::class, 'destroy']);