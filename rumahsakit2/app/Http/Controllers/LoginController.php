<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function postlogin(Request $request)
    {
        //
        $data = UserModel::where('username', $request->username)->firstOrFail();
        if ($data) {
            // dd($data, $request);
            // return redirect('/');
            if ($request->password == $data->password) {
                if ($data->level == 1) {
                    $pasien = DB::table('pasien')
                        ->where('user_id_user', $data->id_user)
                        ->get();
                    Session::put('id_pasien', $pasien[0]->id_pasien);
                    Session::put('level', $data->level);
                    // dd(session('level'));
                    return redirect('/rumahsakit');
                } elseif ($data->level == 2) {
                    $dokter = DB::table('dokter')
                        ->where('user_id_user', $data->id_user)
                        ->get();
                    Session::put('id_dokter', $dokter[0]->id_dokter);
                    Session::put('level', $data->level);
                    return redirect('/dokter');
                } else {
                    Session::put('level', $data->level);
                    return redirect('/');
                }
            } else {
                return redirect('/login');
            }
        }
    }

    public function postlogout()
    {
        //
        session()->flush();
        return redirect('/login');
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
        //
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
