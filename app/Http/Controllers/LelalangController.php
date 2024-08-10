<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LelalangController extends Controller
{

    public function view (){
        return view('layout.lelang.index',[
            'url'  => 'lelang',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
    }

    public function detail(){
        return view('layout.lelang.detail',[
            'url' => 'detail-lelang',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
        ]);
    }

}
