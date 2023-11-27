<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreEnglishRequest;
use App\Http\Requests\UpdateEnglishRequest;
use Illuminate\Http\Request;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

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
            $requestedSlugs = ['COMPANYPROFILE', 'COMPANYBOARDOFDIRECTORS',
            'COMPANYVISION,MISSION&VALUES','COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW'
            ,'COMPANYKANCERTIFICATION','COMPANYJISCERTIFICATION','COMPANYSNICERTIFICATION',
            'COMPANYSIRIMCERTIFICATION','COMPANYISOCERTIFICATION','COMPANYTKDNCERTIFICATION',
            'COMPANYGROUPVIDEO','COMPANYMANAGEMENTSYSTEM','INDUSTRIALPROCESSFACILITAS',
            'INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING','INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING',
            'INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS','INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS',
            'INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS','SUBSIDIARIESPT.ISPATWIREPRODUCT',
            'SUBSIDIARIESPT.ISPATPANCAPUTRA','SUBSIDIARIESPT.ISPATBUKITBAJA',
            'BROCHUREPT.ISPATINDO','BROCHUREPT.ISPATWIREPRODUCT','BROCHUREPT.ISPATPANCAPUTRA',
            'BROCHUREPT.ISPATBUKITBAJA'];
        } elseif (Gate::allows('she')) {
            $requestedSlugs = ['ENVIRONMENT', 'COMPANYSHE'];
        } elseif (Gate::allows('personalia')) {
            $requestedSlugs = ['CAREERS'];
        } elseif (Gate::allows('qualitycontrol')) {
            $requestedSlugs = ['PRODUCTHIGHCARBONSTEEL', 'PRODUCTLOWCARBONSTEEL','PRODUCTCOLDHEADINGQUALITYSTEEL',
            'PRODUCTGENERALPURPOSEWR','PRODUCTWELDINGELECTRODE','PRODUCTPLAINDEFORMBAR','PRODUCTGENERALSTRUCTURE',
            'PRODUCTNAILS&NAILWIRE','PRODUCTSCRAPPROVIDER'];
        } else {
            return redirect('/admin/news');
        }

        // Mengambil data English yang sesuai dengan slug dan name pengguna saat ini
        $posts = English::whereIn('slug', $requestedSlugs)
            ->latest()
            ->paginate(7);

        $english = English::all();

        return view('admin.layout.english', [
            'title' => 'My Posts In English',
            'posts' => $posts,
            'user' => $user->name,
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
        $rules = [
            'title' => ['required'],
            'slug' => ['required', 'unique:englishes'],
            'content' => ['required']
        ];

        $this->validate($request, $rules);

        // Pemanggilan fungsi uploadFileAttachment jika ada file attachment
        $contentWithImages = $this->uploadFileAttachment($request->content);

        $article = English::create([
            'title' => $request->title,
            'name' => auth()->user()->name,
            'slug' => $request->slug,
            'content' => $contentWithImages
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
            'content' => $english->content,
            'slug' => $english->slug
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, English $english)
    {
        $rules = [
            'title' => ['required'],
            'slug' => ['required'],
            'content' => ['required'],
        ];

        $this->validate($request, $rules);

        // Pemanggilan fungsi uploadFileAttachment jika ada file attachment
        $contentWithImages = $this->uploadFileAttachment($request->content);

        // Pemanggilan fungsi updateImageInContent untuk memperbarui konten dengan URL yang sesuai
        $contentWithImages = $this->updateImageInContent($contentWithImages, $english->content);

        // Menggunakan slug sebagai kondisi pembaruan
        English::where('slug', $english->slug)->update([
            'title' => $request->title,
            'name' => auth()->user()->name,
            'slug' => $request->slug,
            'content' => $contentWithImages,
        ]);

        return redirect('/admin/english');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(English $english)
    {

        English::destroy($id);

        return redirect('/admin/english')->with('success', 'Post has been deleted');
    }

    protected function uploadFileAttachment($content)
    {
        $images = collect(json_decode($content, true)['attachments'] ?? [])
            ->filter(function ($attachment) {
                return $attachment['type'] === 'file';
            });

        $images->each(function ($image) {
            $dataURL = $image['content'];
            $src = $this->uploadImageToStorage($dataURL);

            // Mengganti 'content' dengan URL penyimpanan yang benar
            $image['content'] = $src;
        });

        // Mengembalikan konten yang telah diperbarui dengan URL gambar yang benar
        return json_encode(['document' => ['newAttachments' => $images]]);
    }


    protected function uploadImageToStorage($dataURL)
    {
        // Mengambil base64 data dari URL gambar
        $base64_str = substr($dataURL, strpos($dataURL, ',') + 1);
        $image_data = base64_decode($base64_str);

        Storage::makeDirectory('file/content');

        // Menyimpan gambar ke penyimpanan lokal atau awan
        $path = Storage::put('file/content', $image_data);

        // Mengembalikan URL penyimpanan
        return asset($path);
    }

    protected function updateImageInContent($newContent, $oldContent)
    {
        $oldImages = collect(json_decode($oldContent, true)['attachments'] ?? [])
            ->filter(function ($attachment) {
                return $attachment['type'] === 'file';
            });

        $newImages = collect(json_decode($newContent, true)['attachments'] ?? [])
            ->filter(function ($attachment) {
                return $attachment['type'] === 'file';
            });

        $newImages->each(function ($newImage) use ($oldImages) {
            // Membandingkan file attachment berdasarkan nama
            $matchedOldImage = $oldImages->firstWhere('filename', $newImage['filename']);

            if ($matchedOldImage) {
                // Mengganti 'content' dengan URL penyimpanan yang baru
                $newImage['content'] = $matchedOldImage['content'];
            }
        });

        // Menggabungkan attachment lama dan baru ke dalam konten yang diperbarui
        $newAttachments = $oldImages->merge($newImages);

        // Mengembalikan konten yang telah diperbarui dengan URL gambar yang sesuai
        return json_encode(['document' => compact('newAttachments')]);
    }

    public function handleFileUpload(Request $request)
    {
        $key = $request->key; // Pastikan bahwa 'key' adalah nama yang sesuai dengan kebutuhan Anda

        // Simpan file ke penyimpanan lokal atau awan, seperti yang Anda lakukan sebelumnya
        // ...

        // Tambahkan pesan log
        \Log::info("File uploaded successfully. Key: $key");

        // Berikan respons yang sesuai
        return response('', 204); // Atau respons sesuai kebutuhan Anda
    }


}
