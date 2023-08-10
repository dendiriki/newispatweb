<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\English;

class LayoutController extends Controller
{
    public function customer() {
        return view('layout.customercenter.index');
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


        Mail::to('dendirikirahmawan@gmail.com')->cc(['dendi.riki@mittalsteel.com'])->send(new SendEmail($data));
        return redirect('/')->with('success','Successfully send massage');
    }

    public function bod(){
        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYBOARDOFDIRECTORS'),
        ]);
    }

    public function profilindo() {

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYPROFILE'),
        ]);

    }

    public function vision(){

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYVISION,MISSION&VALUES'),
        ]);

    }

    public function highlight(){

        return View ('layout.company.index',[
            'english' => English::firstWhere('slug','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'),
        ]);
    }

    public function highcarbon(){
        return View ('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTHIGHCARBONSTEEL'),
        ]);
    }

    public function lowcarbon(){
        return View ('layout.product.index',[
            'english' => English::firstWhere('slug','PRODUCTLOWCARBONSTEEL'),
        ]);
    }

}
