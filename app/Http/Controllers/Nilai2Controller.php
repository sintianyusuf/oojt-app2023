<?php

namespace App\Http\Controllers;

use App\Models\Nilai2;
use Illuminate\Http\Request;

class Nilai2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai2 = Nilai2::all();
       return view('nilai2.index', compact('nilai2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai2.create');
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
            'nim' => 'required',
            'nama_mahasiwa' => 'required',
            'skil_input' => 'required',
            'presentasi_kehadiran' => 'required',
            'nilai_p1' => 'required',
            'nilai_p2' => 'required',
            'data_input' => 'required',
            'pekerjaan' => 'required',
            'total_nilai' => 'required',
            'ket' => 'required',

        ]);

       Nilai2::create($ValidatedData);
        return redirect() -> route('nilai2.index');
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
    public function edit( Nilai2 $nilai2)
    {
        return view('nilai2.edit', compact('nilai2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Nilai2 $nilai2)
    {
        $ValidatedData = $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'skil_input' => 'required',
            'presentasi_kehadiran' => 'required',
            'nilai_p1' => 'required',
            'nilai_p2' => 'required',
            'data_input' => 'required',
            'pekerjaan' => 'required',
            'total_nilai' => 'required',
            'ket' => 'required',
        ]);


        // User::create($ValidatedData);
        Nilai2::where('id_nilai2', $nilai2->id_nilai2) ->update($ValidatedData);
        return redirect() -> route('nilai2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai2 $nilai2)
    {
        Nilai2::destroy($nilai2->id_nilai2);
        return redirect()->route('nilai2.index');
    }
}
