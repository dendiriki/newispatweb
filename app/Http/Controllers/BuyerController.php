<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Lelang;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::all(); // Mengambil semua data buyer
        return response()->json($buyers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'npwp' => 'required|string|max:20|unique:buyers', // Validasi NPWP
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:buyers', // Validasi email
            'status' => 'nullable|string|max:10',
        ]);

        $buyer = Buyer::create($validatedData);
        return response()->json($buyer, 201);
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
