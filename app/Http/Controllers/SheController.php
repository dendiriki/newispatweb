<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheController extends Controller
{
    public function index(){
        return view('admin.layout.she',[

        ]);
    }
}
