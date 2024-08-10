<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use DOMDocument;
use Illuminate\Http\Request;

class AdminlelangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         Return view('admin.layout.lelang.index',[
            'title' => 'Management Lelang',
            'lelangs' => Lelang::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.lelang.create',[
            'title' => 'Management Lelang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $rules=[
            'title' => ['required'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => ['required']
            ];

        $this->validate($request,$rules);

        $content = $request->content;

        $dom = new DOMDocument();
        @$dom->loadHTML($content,9);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $key => $img){
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/uplade/" . time(). $key. '.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
            $existingClass = $img->getAttribute('class');
            $img->setAttribute('class', $existingClass . ' img-fluid');
        }

        $content = $dom->saveHTML();

        // Menyimpan gambar
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $namaFile = time().'_'.$file->getClientOriginalName();
            $tujuanUpload = 'file/lelang'; // Path untuk menyimpan gambar
            $file->move(public_path($tujuanUpload), $namaFile);

            // Anda dapat menyimpan nama file ke database di sini jika diperlukan
        }

        Lelang::create([
            'title' => $request->title,
            'picture' => $request->picture,
            'content' => $content,
            'status' => 'open',
            'satuan' => $request->satuan,
            'links' => 'defult',
            'created_by' => auth()->user()->name
        ]);
     return redirect('/admin/lelang')->with('success', 'Gambar berhasil diunggah');

    }

    /**
     * Display the specified resource.
     */
    public function show(Lelang $lelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lelang $lelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lelang $lelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lelang $lelang)
    {
        //
    }
}
