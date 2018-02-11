<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function hello(){
        $data= array(
            'first_part' => "Hello world!",
            'second_part' => "INJECTED"
        );
        return view('Custom_pages.hello')->with($data);
    }
    public function about(){
        return view('Custom_pages.about');
    }
    public function blog(){
        $data= array(
            'title' => 'Blog',
            'post_list' => ['post 1', 'post 2', 'post 3']
        );
        return view('Custom_pages.blog')->with($data);
    }
}
