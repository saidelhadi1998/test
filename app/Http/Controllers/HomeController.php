<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $data=1;
        return view("welcome",["data"=>$data]);
    }
}
