<?php

namespace App\Http\Controllers;

use App\Models\Slugpost;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSlugpostRequest;
use App\Http\Requests\UpdateSlugpostRequest;

class SlugpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Return view('admin.layout.adminslug',[
            'slugs' => Slugpost::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layout.createslug');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'value' => ['required','unique:slugposts'],
        ]);

        Slugpost::create($validatedData);
        return redirect('/admin/slug')->with('success','New Post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slugpost $slugpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slugpost $slugpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlugpostRequest $request, Slugpost $slugpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slugpost $slugpost)
    {
        //
    }
}
