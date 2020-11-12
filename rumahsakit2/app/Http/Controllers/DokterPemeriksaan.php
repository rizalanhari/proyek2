<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class DokterPemeriksaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $date = Carbon::now();
        $idate = $date->format('Y-m-d');
        Session::put('id_dokter', 1);
        $pendaftaran = DB::table('pendaftaran')
            ->join('pasien', 'pasien.id_pasien', '=', 'pendaftaran.pasien_id_pasien')
            ->select('pendaftaran.*', 'pasien.nama_depan', 'pasien.nama_belakang')
            ->where('pendaftaran.dokter_id_dokter', '=', session('id_dokter'))
            // ->where('pendaftaran.status_id_status', '=', 1)
            ->get();
        // dd($date->format('Y-m-d'), $pendaftaran);
        return view('dokter/pemeriksaan/index', ['pendaftaran' => $pendaftaran], ['date' => $idate]);
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
