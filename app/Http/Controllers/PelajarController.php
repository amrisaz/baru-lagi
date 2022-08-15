<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajar;

class PelajarController extends Controller
{
    //
    public function index()
    {
        $pelajar = Pelajar::all();
        return view('pelajar.index', compact(['pelajar']));
    }

    public function create()
    {
        return view('pelajar.create');
    }

    public function store(Request $request)
    {
        Pelajar::create($request->except(['_token','submit']));
        return redirect('/pelajar');
    }
    
    public function edit($id)
    {
        $pelajar = Pelajar::find($id);
        return view('pelajar.edit',compact(['pelajar']));
    }

    public function update($id, Request $request)
    {
        $pelajar = Pelajar::find($id);
        $pelajar->update($request->except(['_token','submit']));
        return redirect('/pelajar');
    }

    public function destroy($id)
    {
        $pelajar = Pelajar::find($id);
        $pelajar->delete();
        return redirect('/pelajar');
    }

    
}
