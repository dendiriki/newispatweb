<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Return view('admin.layout.admin',[
            'title' => 'My Post In Indonesia',
            'posts' => Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules=[
            'title' => ['required'],
            'name' => ['required'] ,
            'slug' => ['required','unique:posts'],
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

    $article = Post::create([
        'title' => $request->title,
        'name' => $request->name,
        'slug' => $request->slug,
        'content' => $dom->saveHTML()

    ]);


     return redirect('/admin/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return View ('admin.layout.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        Return view('admin.layout.edit',[
           'post' => $post,
           'content' => $post->content
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
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


    Post::where('id',$post->id)->update([
        'title' => $request->title,
        'name' => $request->name,
        'slug' => $request->slug,
        'content' => $dom->saveHTML()

    ]);

    return
    redirect('/admin/posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/admin/posts')->with('success',' Post has been deleted');
    }
}
