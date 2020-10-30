<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    //login page
    public function login(Request $req){

        $email = $req->get('email');
        $pass = $req->get('password');

        $result = json_decode(DB::Table('users')->where(['email'=>$email, 'password'=>$pass])->get(), true);

        if ($result != null){

            //echo $result;

            $req->session()->put('user', $result);

            return redirect('/home');
        }
    }

    //register account
    public function registerAccount(Request $req){
        $name = $req->get('name');
        $email = $req->get('email');
        $password = $req->get('password');

        DB::Table('users')->insert(array('name'=>$name, 'email'=>$email, 'password'=>$password));

        return redirect('/');
    }

    //logout
    public function logout(Request $req){
        $req->session()->forget('user');
        return redirect('/');
    }

}
