<?php

namespace App\Http\Controllers;

use App\Models\Suratizin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratizin = Suratizin::all();
        return view('suratizin.index', compact('suratizin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('suratizin.create');

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
            'tanggal' => '',
            'mhs_nim' => '',
            'durasi' => '',
            'keterangan' => '',
            'status' => '',
        ]);

        $ValidatedData['status'] = 'proses';
        $ValidatedData['mhs_nim'] = Auth::user()->mahasiswa->nim;

       Suratizin::create($ValidatedData);
        return redirect() -> route('suratizin.index');
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
    public function edit( Suratizin $suratizin)
    {
        return view('suratizin.edit', compact('suratizin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratizin $suratizin )
    {
        $ValidatedData = $request->validate([
            'tanggal' => 'required',
            'durasi' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);


        // User::create($ValidatedData);
        Suratizin::where('id_suratizin', $suratizin->id_suratizin) ->update($ValidatedData);
        return redirect() -> route('suratizin.index');
    }

    public function updatestatus(Request $request, $id_suratizin )
    {
        $suratizin = Suratizin::find($id_suratizin);
        $suratizin->status = $request->status;
        $suratizin->update();


        // Suratizin::where('id_suratizin', $suratizin->id_suratizin) ->update($ValidatedData);
        return redirect() -> route('suratizin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Suratizin $suratizin)
    {
        Suratizin::destroy($suratizin->id_suratizin);
        return redirect()->route('suratizin.index');
    }
}
