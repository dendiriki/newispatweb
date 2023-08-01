<?php

namespace App\Http\Controllers;

use App\Models\English;
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
        Return view('admin.layout.english',[
            'title' => 'My Post In English',
            'posts' => English::all(),
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
            'name' => ['required'] ,
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
        'name' => $request->name,
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
            'post' => $english,
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
            'name' => ['required'] ,
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


    English::where('id',$post->id)->update([
        'title' => $request->title,
        'name' => $request->name,
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
        Post::destroy($english->id);
        return redirect('/admin/posts')->with('success',' Post has been deleted');
    }
}
