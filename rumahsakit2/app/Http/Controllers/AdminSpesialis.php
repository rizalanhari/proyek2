<?php

namespace App\Http\Controllers;

use App\Models\SpesialisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSpesialis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spesialis = DB::table('spesialis')->get();
        return view('admin/spesialis/index', ['spesialis' => $spesialis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/spesialis/create');
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
        SpesialisModel::create($request->all());
        return redirect('admin/spesialis')->with('status', 'Data Spesialis Berhasil Ditambah');
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
    public function edit(SpesialisModel $spesialis)
    {
        //
        return view('admin/spesialis/edit', ['spesialis' => $spesialis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpesialisModel $spesialis)
    {
        //
        SpesialisModel::where('id_spesialis', $spesialis->id_spesialis)
            ->update([
                'nama_spesialis' => $request->nama_spesialis,
            ]);
        return redirect('admin/spesialis')->with('status', 'Data Spesialis Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpesialisModel $spesialis)
    {
        //
        SpesialisModel::destroy($spesialis->id_spesialis);
        return redirect('/admin/spesialis')->with('status', 'Data Spesialis Berhasil Dihapus');
    }
}
