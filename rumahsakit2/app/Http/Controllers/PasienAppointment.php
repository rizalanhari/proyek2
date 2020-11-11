<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranModel;
use App\Models\PoliModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PasienAppointment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $poli = DB::table('poli')->get();
        $dokter = DB::table('dokter')->get();
        return view('pasien/appointment/index', ['poli' => $poli], ['dokter' => $dokter]);
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
        PendaftaranModel::create([
            'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
            'dokter_id_dokter' => $request->dokter_id_dokter,
            'pasien_id_pasien' => session('id_pasien'),
            'poli_id_poli' => session('poli.id_poli'),
            'status_id_status' => 1,

        ]);
        return redirect('/rumahsakit')->with('status', 'Data Pendaftaran Berhasil Ditambah');
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

    public function selectpoli(PoliModel $poli)
    {
        //
        Session::put('poli', $poli);
        $dokter = DB::table('dokter')->get();
        $pasien = DB::table('pasien')->where('id_pasien', '=', session('id_pasien'))->get();

        return view('pasien/appointment/dokter', ['dokter' => $dokter], ['pasien' => $pasien]);
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
