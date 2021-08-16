<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Pelanggan;
use App\User;

class UserController extends Controller
{

    public function login_pegawai(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'password' => 'required '
        ]);

        $user = User::where('name', $request->name)->first();
        if ($user) {
            if (password_verify($request->password, $user->password)){
                $tokenResult = $user->createToken('AccessToken');
                $token = $tokenResult->token;
                $token->save();

                return response()->json([
                    'success'       => 1,
                    'message'       => 'selamat datang '.$user->name,
                    'access_token'  => $tokenResult->accessToken,
                    'token_id'      => $token->id,
                    'pegawai'       => $user
                ]);
            }
            return $this->error('Password Salah');
        }
        return $this->error('Anda Tidak Terdaftar');
    }

    public function login_pelanggan(Request $request)
    {
        $pelanggan = Pelanggan::where('name', $request->name)->first();
        if ($pelanggan) {
            if (password_verify($request->password, $pelanggan->password)) {

                $tokenResult    = $pelanggan->createToken('AccessToken');
                $token          = $tokenResult->token;
                $token->save();

                return response()->json([
                    'success'       => 1,
                    'message'       => 'selamat datang '.$pelanggan->name,
                    'access_token'  => $tokenResult->accessToken,
                    'token_id'      => $token->id,
                    'pelanggan'     => $pelanggan
                ]);
            }
            return $this->error('Password Salah');
        }
        return $this->error('Anda Tidak Terdaftar');
    }

    function register_pelanggan(Request $request)
    {
        $validateData   = Validator::make($request->all(), [
            'name'          => 'required|unique:pelanggans',
            'nama_lengkap'  => 'required',
            'nik'           => 'required|unique:pelanggans',
            'alamat'        => 'required',
            'telepon'       => 'required',
            'password'      => 'required|min:8'
        ]);

        if ($validateData->fails()) {
            $val = $validateData->errors()->first();
            return $this->error($val);
        }

        // create user
        $pelanggan = Pelanggan::create([
            'name'              => $request->get('name'),
            'nama_lengkap'      => $request->get('nama_lengkap'),
            'nik'               => $request->get('nik'),
            'alamat'            => $request->get('alamat'),
            'telepon'           => $request->get('telepon'),
            'jenis_kelamin'     => $request->get('jenis_kelamin'),
            'password'          => bcrypt($request->get('password'))
        ]);

        $pelanggan->save();

        return response()->json([
            'success'       => 1,
            'message'       => 'selamat datang '.$pelanggan->name,
            'pelanggan'     => $pelanggan
        ]);
    }

    public function error($pesan)
    {
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
