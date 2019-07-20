<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function connect(){
        if( auth()->check())
            return redirect('/');
        return view('Connect/connect');
    }

    public function traitement(){

        $connect = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($connect){
            return redirect('/store');
        }
        else return back();


    }

    public function inscriptionChoix(){
        return view('Connect/formChoix');
    }

    public function inscriptionform(){
        return view('Connect/InscriptionUser');
    }

    public function inscriptionformFour() {
        return view('Connect/InscriptionFour');
    }

    public function addUser(){

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'type' => 2,
        ]);

        return redirect('/connexion');

    }

    public function addFour(){

    }

    public function dec(){
        auth()->logout();

        return redirect('/');
    }
}
