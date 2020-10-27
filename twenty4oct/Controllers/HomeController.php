<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $req){
        $name = $req->get('name');
        $req->session()->put('name', $name);

        return redirect('/home');
    }

    public function home(Request $req){
        if ($req->session()->get('name')){
            return view('home', ['name'=>$req->session()->get('name')]);
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function about(Request $req){
        if ($req->session()->get('name')){
            return view('about');
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function contact(Request $req){
        if ($req->session()->get('name')){
            return view('contact');
        }
        else {
            return view('index', ['msg'=>"Please Login to continue..."]);
        }
    }

    public function logout(Request $req){
        $req->session()->forget('name');
        return redirect('/');
    }
}
