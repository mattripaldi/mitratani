<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class PesananbenihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesananbenih', compact('pesanan'));
    }

    // public function formnoinduk()
    // {
    
    //     return view('tambahnomorinduk');
    // }
    public function noinduk($id)
    {
        $data = Pesanan::where('id',$id)->first();

        return view('editpesanan',['detail'=>$data]);
    }


    public function show($id)
    {
    //    $pesanan->lahan_pelanggan
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $stok= Pesanan::findorfail($id);
        $stok->nomor_induk = $request->nomor_induk;
        $stok->status_pesanan = $request->status_pesanan;
        $stok->save();
        
        return redirect('admin/pesananbenih');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
