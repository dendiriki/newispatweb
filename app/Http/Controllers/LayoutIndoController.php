<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class LayoutIndoController extends Controller
{
    public function bod_indo(){

        $isexist = Post::select("*")
        ->where("slug","COMPANYBOARDOFDIRECTORS")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYBOARDOFDIRECTORS'),
            'url' => 'bod',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index',[
                'url' => 'bod',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }

        // return View ('layout.company.index_indo',[
        //     'post' => Post::where('slug','=','COMPANYBOARDOFDIRECTORS'),
        //     'url' => 'bod'
        // ]);
    }

    public function profilindo_indo() {

        $isexist = Post::select("*")
        ->where("slug","COMPANYPROFILE")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYPROFILE'),
            'url' => 'profilindo',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index',[
                'url' => 'profilindo',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }

        // return View ('layout.company.index_indo',[
        //     'post' => Post::firstWhere('slug','COMPANYPROFILE'),
        //     'url' => 'profilindo',
        //     'class' => 'sub_page',
        //     'navbar' =>'timpanav'
        // ]);

    }

    public function vision_indo(){

        return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','COMPANYVISION,MISSION&VALUES'),
        ]);

    }

    public function highlight_indo(){

        return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
        ]);
    }

    public function highcarbon_indo(){
        return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','PRODUCTHIGHCARBONSTEEL'),
        ]);
    }

    public function lowcarbon_indo(){
        return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','PRODUCTLOWCARBONSTEEL'),
        ]);
    }

    public function clodheading_indo(){
        return view('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','PRODUCTCOLDHEADINGQUALITYSTEEL'),
        ]);
    }
}
