<?php

namespace App\Http\Controllers;

use App\Models\DokterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminDokter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dokter = DB::table('dokter')
            ->join('spesialis', 'dokter.spesialis_id_spesialis', '=', 'spesialis.id_spesialis')
            ->select('dokter.*', 'spesialis.nama_spesialis')
            ->get();
        // dd($dokter);
        return view('admin/dokter/index', ['dokter' => $dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $value = session('username');
        $id_user = DB::table('user')->where('username', $value)->pluck('id_user');
        $spesialis = DB::table('spesialis')->get();
        $poli = DB::table('poli')->get();
        Session::flash('id_user', $id_user[0]);
        // dd($id_user);
        return view('admin/dokter/create', ['poli' => $poli], ['spesialis' => $spesialis], $id_user);
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
        // dd($request);
        DokterModel::create($request->all());
        return redirect('admin/dokter');
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
