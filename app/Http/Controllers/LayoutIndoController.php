<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Grade;
use Illuminate\Http\Request;

class LayoutIndoController extends Controller
{

    public function customer_indo() {
        return view('layout.customercenter.index_indo',[
            'grades' => Grade::all(),
            'url'  => 'customer-center',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);

    }

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
            return view('layout.notfound.index_indo',[
                'url' => 'bod',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
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
            return view('layout.notfound.index_indo',[
                'url' => 'profilindo',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }

    public function vision_indo(){
        $isexist = Post::select("*")
        ->where("slug","COMPANYVISION,MISSION&VALUES")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYVISION,MISSION&VALUES'),
            'url' => 'vision',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'vision',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }

    public function highlight_indo(){
        $isexist = Post::select("*")
        ->where("slug","COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW")->exists();

        if($isexist){
             return View ('layout.company.index_indo',[
            'post' => Post::firstWhere('slug','=','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
            'url' => 'highlight',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'highlight',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }

    public function highcarbon_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTHIGHCARBONSTEEL")->exists();

        if($isexist){
             return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTHIGHCARBONSTEEL'),
            'url' => 'highcarbon',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'highcarbon',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }

    public function lowcarbon_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTLOWCARBONSTEEL")->exists();

        if($isexist){
             return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTLOWCARBONSTEEL'),
            'url' => 'lowcarbon',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'lowcarbon',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }

    public function clodheading_indo(){
        $isexist = Post::select("*")
        ->where("slug","PRODUCTCOLDHEADINGQUALITYSTEEL")->exists();

        if($isexist){
             return View ('layout.product.index_indo',[
            'post' => Post::firstWhere('slug','=','PRODUCTCOLDHEADINGQUALITYSTEEL'),
            'url' => 'clodheading',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
        }else{
            return view('layout.notfound.index_indo',[
                'url' => 'clodheading',
                'class' => 'sub_page',
                'navbar' =>'timpanav'
            ]);
        }
    }
}
