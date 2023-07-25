<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

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
            'category1' => ['max:255'],
            'category2' => ['max:255'],
            'category3' => ['max:255'],
            'grade1' => ['max:255'],
            'grade2' => ['max:255'],
            'grade3' => ['max:255'],
            'size' => ['max:255'],
            'end' => ['max:255'],
            'issue' => ['max:255'],
            'massage' => ['Max:255'],
        ]);



        Customer::create($validatedData);
        return redirect('/')->with('success','Successfully send massage');
    }
}
