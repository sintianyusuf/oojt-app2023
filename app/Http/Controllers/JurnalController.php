<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = Jurnal::all();
        return view('jurnal.index', compact('jurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurnal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'hari_tanggal' => '',
            'keterangan' => '',
            'mhs_nim' => '',
        ]);

        $ValidatedData['mhs_nim'] = Auth::user()->mahasiswa->nim;

       Jurnal::create($ValidatedData);
        return redirect() -> route('jurnal.index');
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
    public function edit( Jurnal $jurnal)
    {
        return view('jurnal.edit', compact('jurnal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jurnal $jurnal)
    {
        $ValidatedData = $request->validate([
            'hari_tanggal' => '',
            'keterangan' => '',
        ]);


        // User::create($ValidatedData);
        Jurnal::where('id_jurnal', $jurnal->id_jurnal) ->update($ValidatedData);
        return redirect() -> route('jurnal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal)
    {
        Jurnal::destroy($jurnal->id_jurnal);
        return redirect()->route('jurnal.index');
    }
}
