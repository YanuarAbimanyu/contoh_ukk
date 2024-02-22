<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('Pengguna.index');
    }

    public function store(Request $request){
        User::create($request->except(['_token','submit']));
        return redirect('/Pengguna');
    }
}
