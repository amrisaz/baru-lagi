<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    //
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact(['dosen']));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Dosen::create($request->except(['_token','submit']));
        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit',compact(['dosen']));
    }

    public function update($id, Request $request)
    {
        $dosen = Dosen::find($id);
        $dosen->update($request->except(['_token','submit']));
        return redirect('/dosen');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }
}
