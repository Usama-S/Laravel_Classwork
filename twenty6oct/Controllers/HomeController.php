<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(Request $req){

        $value = $req->session()->get('user');

        if ($req->session()->get('user')){
            
            return view('home', ['user'=>$value]);
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function about(Request $req){
        if ($req->session()->get('user')){
            return view('about');
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function contact(Request $req){
        if ($req->session()->get('user')){
            return view('contact');
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function register(Request $req){
        if (!$req->session()->get('user')){
            return view('register');
        }
        else {
            return view('home');
        }
    }

    // public function logout(Request $req){
    //     $req->session()->forget('name');
    //     return redirect('/');
    // }
}
