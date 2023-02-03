<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psn = pesanan::all();
        return view('tampilan.pesanan.pesanan', compact('psn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $psn = new pesanan;
        return view('tampilan.pesanan.tambah', compact('psn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psn = new pesanan();
        $psn->name = $request->name;
        $psn->quantity = $request->quantity;
        $psn->perquantity = $request->perquantity;
        $psn->colors_id = $request->colors_id;
        $psn->brands_id = $request->brands_id;
        $psn->save();

        return redirect('/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psn = pesanan::find($id);
        return view('tampilan.pesanan.edit', compact('psn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $psn = pesanan::find($id);
        $psn->name = $request->name;
        $psn->quantity = $request->quantity;
        $psn->perquantity = $request->perquantity;
        $psn->colors_id = $request->colors_id;
        $psn->brands_id = $request->brands_id;
        $psn->save();

        return redirect('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psn = pesanan::find($id);
        $psn->delete();
        return redirect('/pesanan');
    }
}
