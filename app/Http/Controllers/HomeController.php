<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.service');
    }

     public function project(){
        return view('frontend.project');
    }

    public function contact(){
            return view('frontend.contact');
    }

    public function process(){
            return view('frontend.process');
    }

    public function packages(){
            return view('frontend.packages');
    }

    public function career(){
            return view('frontend.career');
    }

    public function blog(){
            return view('frontend.blog');
    }

}
