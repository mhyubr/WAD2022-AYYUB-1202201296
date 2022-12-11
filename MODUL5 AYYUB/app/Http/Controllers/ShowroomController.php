<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;
use PhpParser\Node\Stmt\Return_;

class ShowroomController extends Controller
{

    public function addCar(Request $request)
    {

        $this->validate($request, [
            'nama_mobil' => 'required|string',
            'pemilik_mobil' => 'required|string',
            'merk_mobil' => 'required|string',
            'tanggal_beli' => 'required|date',
            'deskripsi' => 'required|string',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg',
            'status' => 'required|string',
        ]);

        $foto_mobil = $request->file('foto_mobil');
        $foto_mobil->storeAs('public\asset\img\upload', $foto_mobil->hashName());

        Showroom::create([
            'id_user' => 0,
            'name' => $request->nama_mobil,
            'owner' => $request->pemilik_mobil,
            'brand' => $request->merk_mobil,
            'purchase_date' => $request->tanggal_beli,
            'description' => $request->deskripsi,
            'image' => $foto_mobil->hashName(),
            'status' => $request->status,
        ]);

        return redirect()->route('showCar')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show Car
     * 
     * @return response
     * 
     */
    public function index()
    {
        $showroom = Showroom::all();
        return view('list', ['showroom'=>$showroom, 'title' => 'MyItem']);
    }
}