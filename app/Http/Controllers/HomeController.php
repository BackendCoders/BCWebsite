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

    public function blogDetail($id){
       return view('frontend.blog-detail', compact('id'));
     }

        public function terms(){
                return view('frontend.terms');
        }

     public function privacy_policy(){
                return view('frontend.privacy_policy');
        }
        public function faq(){
                 return view('frontend.faq');
           } 
           
        public function help(){
                 return view('frontend.help');
           }

}
