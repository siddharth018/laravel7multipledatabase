<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function getRecord()
    {
        $blogModel = new Blog;
        $blogModel->setConnection('mysql2');
        $find = $blogModel->find(1);
        return $find;
    }
}