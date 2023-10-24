<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreEnglishRequest;
use App\Http\Requests\UpdateEnglishRequest;
use Illuminate\Http\Request;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic as Image;

class EnglishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = auth()->user(); // Mengambil pengguna saat ini

    $requestedSlugs = [];

    if (Gate::allows('admin')) {
        $requestedSlugs = ['COMPANYPROFILE', 'COMPANYBOARD'];
    } elseif (Gate::allows('she')) {
        $requestedSlugs = ['ENVIRONMENT', 'COMPANYSHE'];
    } elseif (Gate::allows('personalia')) {
        $requestedSlugs = ['CAREERS'];
    } elseif (Gate::allows('qualitycontrol')) {
        $requestedSlugs = ['PRODUCTHIGHCARBONSTEEL', 'PRODUCTLOWCARBONSTEEL'];
    } else {
        // Logic jika pengguna tidak memiliki izin yang sesuai
        abort(403); // Akses ditolak
    }



    // Mengambil data English yang sesuai dengan slug dan ID pengguna saat ini
    $posts = English::where('slug', $requestedSlugs)
        ->where('name', $user->name)
        ->latest()
        ->paginate(7);

        var_dump( $posts); // Tambahkan ini untuk memeriksa nilai variabel

    return view('admin.layout.english', [
        'title' => 'My Posts In English',
        'posts' => $posts,
        'user' => $user->name
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.createenglish',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules=[
            'title' => ['required'],
            'slug' => ['required','unique:englishes'],
            'content' => ['required']
        ];

        $this->validate($request,$rules);

        $storage="storage/content";
        $dom=new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->content,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images=$dom->getElementsByTagName('img');
        foreach($images as $img){
            $src=$img->getAttribute('src');
            if(preg_match('/data:image/',$src)){
                preg_match('/data:image\/(?<mime>.*?)\;/',$src,$groups);
                $mimetype=$groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
                $filepath=("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)
                ->encode($mimetype,100)
                ->save(public_path($filepath));
                $new_src=asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class','img-responsive');
        }

    }

    $article = English::create([
        'title' => $request->title,
        'name' => auth()->user()->name,
        'slug' => $request->slug,
        'content' => $dom->saveHTML()

    ]);


     return redirect('/admin/english');
    }

    /**
     * Display the specified resource.
     */
    public function show(English $english)
    {
        return View ('admin.layout.englishshow',[
            'english' => $english
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(English $english)
    {
        Return view('admin.layout.englishedit',[
            'english' => $english,
            'content' => $english->content
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, English $english)
    {
        $rules=[
            'title' => ['required'],
            'slug' => ['required',],
            'content' => ['required']
        ];

        $this->validate($request,$rules);

        $storage="storage/content";
        $dom=new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->content,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images=$dom->getElementsByTagName('img');
        foreach($images as $img){
            $src=$img->getAttribute('src');
            if(preg_match('/data:image/',$src)){
                preg_match('/data:image\/(?<mime>.*?)\;/',$src,$groups);
                $mimetype=$groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
                $filepath=("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)
                ->encode($mimetype,100)
                ->save(public_path($filepath));
                $new_src=asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class','img-responsive');
        }

    }


    English::where('id',$english->id)->update([
        'title' => $request->title,
        'name' => auth()->user()->name,
        'slug' => $request->slug,
        'content' => $dom->saveHTML()

    ]);

    return
    redirect('/admin/english');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(English $english)
    {
        English::destroy($english->id);
        return redirect('/admin/english')->with('success',' Post has been deleted');
    }
}
