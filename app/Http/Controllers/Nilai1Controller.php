<?php

namespace App\Http\Controllers;

use App\Models\Nilai1;
use Illuminate\Http\Request;

class Nilai1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai1 = Nilai1::all();
        return view('nilai1.index', compact('nilai1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai1.create');
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
            'nama_mahasiswa' => 'required',
            'nk1' => 'required',
            'nk2' => 'required',
            'nk3' => 'required',
            'nk4' => 'required',
            'nk5' => 'required',
            'jumlah' => 'required',
            'ip' => 'required',
        ]);

      Nilai1::create($ValidatedData);
        return redirect() -> route('nilai1.index');
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
    public function edit(Nilai1 $nilai1)
    {
       return view('nilai1.edit', compact('nilai1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai1 $nilai1)
    {
        $ValidatedData = $request->validate([
            'nama_mahasiswa' => 'required',
            'nk1' => 'required',
            'nk2' => 'required',
            'nk3' => 'required',
            'nk4' => 'required',
            'nk5' => 'required',
            'jumlah' => 'required',
            'ip' => 'required',
        ]);


        // User::create($ValidatedData);
       Nilai1::where('id_nilai1', $nilai1->id_nilai1) ->update($ValidatedData);
        return redirect() -> route('nilai1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Nilai1 $nilai1)
    {
        Nilai1::destroy($nilai1->id_nilai1);
        return redirect()->route('nilai1.index');
    }
}
