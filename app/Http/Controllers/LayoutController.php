<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function customer() {
        return view('layout.customercenter.index');
    }
}
