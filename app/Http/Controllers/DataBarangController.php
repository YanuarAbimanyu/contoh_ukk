<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    // 
    public function index(){
        $produk = DataBarang::all();
        return view('DataBarang.index',compact(['produk']));
    }

    public function create(){
        return view('DataBarang.create');
    }

    public function store(Request $request){
        // dd($request->except(['_token','submit']));
        DataBarang::create($request->except(['_token','submit']));
        return redirect('/DataBarang');
    }

    public function edit($id){
        $produk = DataBarang::where('produk_id', $id)->first();
        return view('DataBarang.edit',compact(['produk']));
    }

    public function update($id, Request $request){
        $produk = DataBarang::where('produk_id', $id)->first();
        $produk-> update($request->except(['_token','submit']));
        return redirect('/DataBarang');
    }

    public function delete($id){
        $produk = DataBarang::where('produk_id', $id)->first();
        $produk -> delete();
        return redirect('/DataBarang');
    }
}
