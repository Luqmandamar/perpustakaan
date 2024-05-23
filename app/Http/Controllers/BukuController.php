<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view("admin.buku.index",[
            "buku"=>Buku::all(),
            
        ]);
    }
    public function tambah(){
        return view("admin.buku.add",[
            "kategori"=>Kategori::all(),
            "lokasi"=>Kategori::all()
        ]);
    }

    public function store (Request $request){
        $data=$request->validate([
            "kode_buku"=>"required|max:20",
            "judul_buku"=>"required",
            "pengarang"=>"required",
            "judul_seri"=>"required",
            "no_panggil"=>"required|max:100",
            "penerbit"=>"required",
            "id_kategori"=>"required",
            "bahasa"=>"required",
            "deskripsi_fisik"=>"required",
            "isbn_issn"=>"required",
            "tahun_buku"=>"required|max:4",
        ]);
        Buku::create($data);
        alert('Sukses','Buku Berhasil di Simpan', 'success');
        return redirect()->route("dashboard.admin.buku");
    }
    public function destroy (Buku $buku){
        $buku->delete();
        alert('Sukses','Buku Berhasil di Hapus', 'success');
        return redirect()->route("dashboard.admin.buku");
    }

    public function edit (Buku $buku){
        return view("admin.buku.edit",[
            "buku"=>$buku,
            "kategori"=>Kategori::all()
            
        ]);
    }

    public function update (Request $request, Buku $buku){
        $data=$request->validate([
            "kode_buku"=>"required|max:20",
            "judul_buku"=>"required",
            "pengarang"=>"required",
            "judul_seri"=>"required",
            "no_panggil"=>"required|max:100",
            "penerbit"=>"required",
            "id_kategori"=>"required",
            "bahasa"=>"required",
            "deskripsi_fisik"=>"required",
            "isbn_issn"=>"required",
            "tahun_buku"=>"required|max:4",
        ]);
        $buku->update($data);
        alert('Sukses','Buku Berhasil di Update', 'success');
        return redirect()->route("dashboard.admin.buku");
    }
}

