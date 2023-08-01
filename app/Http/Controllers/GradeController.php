<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Return view('admin.layout.grade',[
            'title' => 'List Grade Products',
            'grades' => Grade::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.gradecreate',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'description' => ['required'],
        ]);

        $data = Grade::create($validatedData);
        return redirect('/admin/grade')->with('success','Successfully send massage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
