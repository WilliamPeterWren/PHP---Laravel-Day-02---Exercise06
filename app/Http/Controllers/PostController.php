<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function display_iphone(){
        return view('iphone_view', [
            'name1'=>'iphone11',
            'name2'=>'iphone12',
            'name3'=>'iphone13',
            'name4'=>'iphone14',
            'name5'=>'iphone15',
            'name6'=>'iphone16',
        ]);
    }

    public function display_samsung($id){
        return view('samsung_view')->with('id', $id);
    }

    public function display_realme($name){
        return view('realme_view', compact('name'));
    }

    public function display_redmi($id, $name){
        return view('redmi_view', compact('id','name'));
    }
}