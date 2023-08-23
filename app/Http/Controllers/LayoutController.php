<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Grade;
use App\Mail\SendEmail;
use App\Models\English;
use App\Models\Post;

class LayoutController extends Controller
{
    public function customer() {
        return view('layout.customercenter.index',[
            'grades' => Grade::all(),
            'url'  => 'customer',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);

    }

    public function postcustomer(Request $request) {
        $validatedData = $request->validate([
            'option' => ['required','max:255'],
            'name' => ['max:255'],
            'company' => ['max:255'],
            'email' => ['max:255'],
            'about' => ['max:255'],
            'telphone' => ['max:255'],
            'country' => ['max:255'],
            'location' => ['max:255'],
            'grade1' => ['max:255'],
            'grade2' => ['max:255'],
            'grade3' => ['max:255'],
            'size' => ['max:255'],
            'end' => ['max:255'],
            'issue' => ['max:255'],
            'massage' => ['min:3'],
        ]);



        $data = Customer::create($validatedData);


        Mail::to('marketing.indo@mittalsteel.com')->cc(['dendi.riki@mittalsteel.com'])->send(new SendEmail($data));
        return redirect('/')->with('success','Successfully send massage');
    }

    public function bod(){
        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYBOARDOFDIRECTORS'),
            'url' => 'bod',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function profilindo() {

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYPROFILE'),
            'url' => 'profilindo',
            'class' => 'sub_page',
            'navbar' =>'timpanav'

        ]);

    }

    public function vision(){

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYVISION,MISSION&VALUES'),
            'url' => 'vision',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);

    }

    public function highlight(){

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
            'url' => 'highlight',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function milestone(){
        return view('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYMANAGEMENTSYSTEM'),
            'url' => 'milestone',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function she(){
        return view('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYSHE'),
            'url' => 'she',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function highcarbon(){
        return View ('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTHIGHCARBONSTEEL'),
            'url' => 'highcarbon',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function lowcarbon(){
        return View ('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTLOWCARBONSTEEL'),
            'url' =>    'lowcarbon',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function clodheading(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTCOLDHEADINGQUALITYSTEEL'),
            'url'  => 'clodheading',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function generalpw(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTCOLDHEADINGQUALITYSTEEL'),
            'url'  => 'generalpw',
            'class' => 'sub_page',
            'navbar' =>'timpanav'

        ]);
    }

    public function welding(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTWELDINGELECTRODE'),
            'url'  => 'welding',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function pline(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTPLAINDEFORMBAR'),
            'url'  => 'pline',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function structure(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTGENERALSTRUCTURE'),
            'url'  => 'structure',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function nails(){
        return view('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTNAILS&NAILWIRE'),
            'url'  => 'nails',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function ispatwireproduct(){
        return view('layout.subsidiaries.index',[
        'english' => English::firstWhere('slug','SUBSIDIARIESPT.ISPATWIREPRODUCT'),
        'url'  => 'ispatwireproduct',
        'class' => 'sub_page',
        'navbar' =>'timpanav'

        ]);

    }

    public function ispatpancaputra(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','SUBSIDIARIESPT.ISPATPANCAPUTRA'),
            'url'  => 'ispatpancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function ispatbukitbaja(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','SUBSIDIARIESPT.ISPATBUKITBAJA'),
            'url'  => 'ispatbukitbaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }


    public function fasilitas(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSFACILITAS'),
            'url'  => 'fasilitas',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function steelmaking() {
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING'),
            'url'  => 'steelmaking',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function rolling(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING'),
            'url'  => 'rolling',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function fasilitaspancaputra(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS'),
            'url'  => 'fasilitaspancaputra',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function fasilitasbukitnaja(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS'),
            'url'  => 'fasilitasbukitnaja',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function fasilitaswire(){
        return view('layout.subsidiaries.index',[
            'english' => English::firstWhere('slug','INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS'),
            'url'  => 'fasilitaswire',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }

    public function karir(){
        return view('layout.karir.index',[
            'english' => English::firstWhere('slug','CAREERS'),
            'url'  => 'karir',
            'class' => 'sub_page',
            'navbar' =>'timpanav'
        ]);
    }








}
