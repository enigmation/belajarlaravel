<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
$data = [
        [
                'id'=> 1,
                'title'=>'Belajar Laravel Pemula',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                'category'=>'Education',
                'publisherd'=>true,
                'image'=>'/image/laravel.png',
                'video'=>'https://www.youtube.com/embed/_aXKg7LDcxU',
                'created_date'=>date('Y-m-d')
        ],

        [
                'id'=>2,
                'title'=>'Belajar Jetpack Compose Kotlin',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                'category'=>'Education',
                'publisherd'=>true,
                'image'=>'/image/kotlin.png',
                'video'=>'https://www.youtube.com/embed/iVdgQKZcnrM',
                'created_date'=>date('Y-m-d')

        ],
        ];



            return view('blog.index',compact('data'));
    }

    function  tentang(){
            return view('blog.tentang');
    }

    function kontak(){
            return view('blog.kontak');
    }
}
