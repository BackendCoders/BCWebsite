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

    public function techstack(){
            return view('frontend.techstack');
    }

    public function career(){
            return view('frontend.career');
    }

}
