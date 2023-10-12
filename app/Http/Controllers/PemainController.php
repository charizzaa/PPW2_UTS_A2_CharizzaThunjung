<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $tabel_pemain = Pemain::all();
        $tabel_pemain_sort = Pemain::all()->sortByDesc('id');
        $no = 1;

        return view('pemain.index', compact('tabel_pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tabel_pemain = Pemain::find($id);
        return view('pemain.show', compact('tabel_pemain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
