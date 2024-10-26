<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Lelang;
use App\Models\Pelelang;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index($lelangId)
    {
        // Mengambil data lelang berdasarkan ID
        $lelang = Lelang::findOrFail($lelangId);

        // Menampilkan form dengan data lelang yang relevan
        return view('layout.lelang.submit', [
            'url' => 'booking',
            'class' => 'sub_page',
            'navbar' => 'timpanav',
            'sub' => 'EN',
            'lelang' => $lelang
        ]);
    }

    public function store(Request $request, Lelang $lelang)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'npwp' => 'required|string|max:20',
            'penawaran' => 'required|integer',
        ]);

        // Cek apakah buyer sudah ada berdasarkan email atau NPWP
        $buyer = Buyer::where('email', $request->email)
            ->orWhere('npwp', $request->npwp)
            ->first();

        if (!$buyer) {
            // Jika tidak ada buyer, buat buyer baru
            $buyer = Buyer::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nomor_telepon' => $request->nomor_telepon,
                'npwp' => $request->npwp,
                'email' => $request->email,
                'status' => 'active',
            ]);

            $type = 'new buyer';
        } else {
            // Jika buyer sudah ada
            $type = 'normal buyer';
        }

        // Simpan data pelelang ke tabel pelelang
        Pelelang::create([
            'no_lelang' => $lelang->id, // Pastikan ini adalah ID yang benar
            'id_buyer' => $buyer->id,
            'penawaran' => $request->penawaran,
            'status' => 'active',
            'type' => $type,
            'created_at' => now(), // Menggunakan waktu saat ini
            'updated_at' => now(), // Menggunakan waktu saat ini
        ]);

        return redirect()->route('lelangdetail', ['lelang' => $lelang->id])
            ->with('success', 'Pendaftaran lelang berhasil disimpan!');
    }




    public function show($id)
    {
        $buyer = Buyer::findOrFail($id);
        return response()->json($buyer);
    }

    public function update(Request $request, $id)
    {
        $buyer = Buyer::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:20|unique:buyers,npwp,' . $buyer->id, // Validasi NPWP untuk update
            'nomor_telepon' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255|unique:buyers,email,' . $buyer->id, // Validasi email untuk update
            'status' => 'nullable|string|max:10',
        ]);

        $buyer->update($validatedData);
        return response()->json($buyer);
    }

    public function destroy($id)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->delete();
        return response()->json(null, 204);
    }
}
