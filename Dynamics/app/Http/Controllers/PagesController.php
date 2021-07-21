<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function guard(){
        return view('guard');
    }

    public function power(){
        return view('power');
    }

    public function domotics(){
        return view('domotics');
    }

    public function cold(){
        return view('cold');
    }

    public function fmanagement(){
        return view('fmanagement');
    }

    #region :Sous page Securite
    public function acess(){
        return view('securite.acess');
    }

    public function incendie(){
        return view('securite.incendie');
    }

    public function intrusion(){
        return view('securite.intrusion');
    }

    public function reseau(){
        return view('securite.reseau');
    }

    public function surveillance(){
        return view('securite.surveillance');
    }

    #endregion
}
