<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DokterTable extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Session::get('level') == NULL || Session::get('level') != 2) {
                return Redirect::to('/login');
            } else {
                return $next($request);
            }
        });
    }
    public function showresep()
    {
        //
        $resep = DB::table('resep')
            ->join('pendaftaran', 'resep.pendaftaran_id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
            ->join('pasien', 'pendaftaran.pasien_id_pasien', '=', 'pasien.id_pasien')
            ->select('resep.*', 'pendaftaran.dokter_id_dokter', 'pasien.nama_depan', 'pasien.nama_belakang')
            ->where('pendaftaran.dokter_id_dokter', session('id_dokter'))
            ->get();
        return view('dokter/resep/index', ['resep' => $resep]);
    }
    public function showrekammedis()
    {
        //
        $rekammedis = DB::table('rekammedis')
            ->join('pasien', 'rekammedis.pasien_id_pasien', '=', 'pasien.id_pasien')
            ->select('rekammedis.*', 'pasien.nama_depan', 'pasien.nama_belakang')
            ->where('rekammedis.dokter_id_dokter', session('id_dokter'))
            ->get();
        return view('dokter/rekammedis/index', ['rekammedis' => $rekammedis]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
