<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome (){
        return view ('welcome');
    }

    public function about (){
        return view ('pages.about');
    }

    public function index (){
        return view ('pages.index');
    }

    public function admin_layout (){
        return view ('layouts.admin_layout');
    }

    

    


}
