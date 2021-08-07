<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    private $file_path="frontend.pages.";
    public function index(){
        return view($this->file_path.'index');
    }

    public function aboutUs(){
        return view($this->file_path.'about');
    }
    public function contact(){
        return view($this->file_path.'contact');
    }

    public function blogs(){
        return view($this->file_path.'blogs');
    }
    public function blogDetails(){
        return view($this->file_path.'blogDetails');
    }

    public function menu(){
        return view($this->file_path.'menu');
    }
    public function prodcutDetails(){
        return view($this->file_path.'prodcutDetails');
    }
    public function menuList(){
        return view($this->file_path.'menuList');
    }

    public function shop(){
        return   view($this->file_path.'shop');
    }
    public function cart(){
        return   view($this->file_path.'cart');
    }
    public function checkout(){
        return   view($this->file_path.'checkout');
    }
    public function home2(){
        return   view($this->file_path.'home2');
    }




}
