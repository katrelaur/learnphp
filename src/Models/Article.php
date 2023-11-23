<?php
namespace App\Models;

use App\DB;

class Article extends Model {
    public static $table = 'articles';
    public $id;
    public $title;
    public $body;

}