<?php

namespace App\Http\Controllers;

use App\Models\PoliModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminPoli extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Session::get('level') == NULL || Session::get('level') != 3) {
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
        $poli = DB::table('poli')->get();
        return view('admin/poli/index', ['poli' => $poli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/poli/create');
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
        PoliModel::create($request->all());
        return redirect('admin/poli')->with('status', 'Data Poli Berhasil Ditambah');
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
    public function edit(PoliModel $poli)
    {
        //
        return view('admin/poli/edit', ['poli' => $poli]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliModel $poli)
    {
        //
        PoliModel::where('id_poli', $poli->id_poli)
            ->update([
                'nama_poli' => $request->nama_poli,
            ]);
        return redirect('admin/poli')->with('status', 'Data Poli Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliModel $poli)
    {
        //
        PoliModel::destroy($poli->id_poli);
        return redirect('admin/poli')->with('status', 'Data Poli Berhasil Dihapus');
    }
}
