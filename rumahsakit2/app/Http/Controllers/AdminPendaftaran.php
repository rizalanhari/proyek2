<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftaran = DB::table('pendaftaran')
            ->join('pasien', 'pendaftaran.pasien_id_pasien', '=', 'pasien.id_pasien')
            ->join('dokter', 'pendaftaran.dokter_id_dokter', '=', 'dokter.id_dokter')
            ->join('poli', 'pendaftaran.poli_id_poli', '=', 'poli.id_poli')
            ->select('pendaftaran.*', 'pasien.nama_depan as pasien_depan', 'pasien.nama_belakang as pasien_belakang', 'dokter.nama_depan as dokter_depan', 'dokter.nama_belakang as dokter_belakang', 'poli.nama_poli')
            ->get();
        // dump($pendaftaran);
        return view('admin/pendaftaran/index', ['pendaftaran' => $pendaftaran]);
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
