<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VarietasPadi;
use App\StokPadi;

class DftbenihpadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varietas = VarietasPadi::all();

        $stok = StokPadi::join('varietas_padis','varietas_padis.id','=','stok_padis.id_varietas_padi')
                        ->select("varietas_padis.*","stok_padis.*")
                        ->get();

        return view('dftbenihpadi', compact('varietas','stok'));

    }

    public function formbenih()
    {
        $varietas=VarietasPadi::all();

        return view('tambahbenih',compact('varietas'));
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $varietas = VarietasPadi::where('nama_varietas', 'like', "%" . $cari ."%")->first();

        $stok = StokPadi::join('varietas_padis','varietas_padis.id','=','stok_padis.id_varietas_padi')
                            ->where('id_varietas_padi','=', optional($varietas)->id)
                            ->get();

        return view('dftbenihpadi', compact('stok'));
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
        $request->validate([
            'supplier_benih' => 'required',
            'kelas_benih' =>'required',
            'label' => 'required',
            'jumlah_stok' =>'required',
            'tanggal_beli_benih' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'harga_beli_sak' => 'required',
            'harga_jual_sak' =>'required',
            'harga_jual_kg' => 'required',
        ]);

        StokPadi::create([
            'id_varietas_padi' => $request->nama_varietas,
            'supplier_benih' => $request->supplier_benih,
            'kelas_benih' => $request->kelas_benih,
            'label' => $request->label,
            'jumlah_stok' => $request->jumlah_stok,
            'tanggal_beli_benih' => $request->tanggal_beli_benih,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'harga_beli_sak' => $request->harga_beli_sak,
            'harga_jual_sak' => $request->harga_jual_sak,
            'harga_jual_kg' => $request->harga_jual_kg,
            // 'perkiraan_laba' => $request->perkiraan_laba,
        ]);

        return redirect('/admin/dftbenihpadi');
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
        $data = StokPadi::where('id',$id)->first();
        $varietas = VarietasPadi::all();

        return view('editbenih',['detail'=>$data, 'varietas'=>$varietas]);
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
        $stok= StokPadi::findorfail($id);

        $stok->id_varietas_padi = $request->nama_varietas;
        $stok->supplier_benih = $request->supplier_benih;
        $stok->kelas_benih = $request->kelas_benih;
        $stok->label = $request->label;
        $stok->jumlah_stok = $request->jumlah_stok;
        $stok->tanggal_beli_benih = $request->tanggal_beli_benih;
        $stok->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        $stok->harga_beli_sak = $request->harga_beli_sak;
        $stok->harga_jual_sak = $request->harga_jual_sak;
        $stok->harga_jual_kg = $request->harga_jual_kg;
        // $stok->perkiraan_laba = $request->perkiraan_laba;

        $stok->save();

        return redirect('admin/dftbenihpadi');
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
