<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranModel;
use App\Models\RekammedisModel;
use App\Models\ResepModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class DokterPemeriksaan extends Controller
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
        // dd($request);
        //
        $date = Carbon::now();
        $idate = $date->format('Y-m-d');
        PendaftaranModel::where('id_pendaftaran', $request->id_pendaftaran)
            ->update([
                'status_id_status' => 2,
            ]);
        // $pendaftaran = DB::table('pendaftaran')->where('id_pendaftaran', $request->id_pendaftaran)->get();
        RekammedisModel::create([
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'pasien_id_pasien' => $request->pasien_id_pasien,
            'dokter_id_dokter' => $request->dokter_id_dokter,
            'tanggal_rekam' => $idate
        ]);
        ResepModel::create([
            'pendaftaran_id_pendaftaran' => $request->id_pendaftaran,
            'resep' => $request->resep,
            'tanggal_resep' => $idate
        ]);
        return redirect('dokter')->with('status', 'Data Rekammedis Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PendaftaranModel $pendaftaran)
    {
        //
        $pasien = DB::table('pasien')->where('id_pasien', $pendaftaran->pasien_id_pasien)->get();
        $pendaftaran2 = DB::table('pendaftaran')->where('id_pendaftaran', $pendaftaran->id_pendaftaran)->get();
        // dd($pendaftaran, $pasien);
        return view('dokter/pemeriksaan/rekammedis', ['pendaftaran' => $pendaftaran2], ['pasien' => $pasien]);
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
