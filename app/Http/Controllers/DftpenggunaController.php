<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class dftpenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user= User::all ();
        $user = User::orderBy('id', 'Desc')->get();
        return view('dftpengguna', compact('user'));
    }

    public function formpengguna()
    {

        return view('tambahpengguna');
    }

    public function detailpengguna($id)
    {
        $data = User::where('id',$id)->first();
        return view('detailpengguna', compact('data'));
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $user= User::where('nama_lengkap', 'like', "%" . $cari ."%")->get();

        return view('dftpengguna', compact('user'));
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
            'name' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'mimes:jpeg,png,jpg,gif',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => Hash::make($request->get('password')),
            'role' => $request->role,
        ]);

        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file->move('images',$file->getClientOriginalName());

            $user->update([
                'foto' => $file->getClientOriginalName(),
            ]);
        }

        return redirect('/admin/home');
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
        $data = User::where('id',$id)->first();

        return view('editpengguna',['detail'=>$data]);
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
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'mimes:jpeg,png,jpg,gif',
            'role' => 'required',
        ]);

        $pengguna = User::findorfail($id);
        $pengguna->nama_lengkap = $request->nama_lengkap;
        $pengguna->nik = $request->nik;
        $pengguna->name = $request->name;
        $pengguna->alamat = $request->alamat;
        $pengguna->telepon = $request->telepon;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;
        $pengguna->role = $request->role;
        $pengguna->save();

        if($request->password) {
            $pengguna->update([
                'password' => Hash::make($request->get('password')),
            ]);
        }

        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file->move('images',$file->getClientOriginalName());

            User::findorfail($id)
                ->update(["foto"=>$file->getClientOriginalName()]);
        }

        return redirect('admin/home');
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
