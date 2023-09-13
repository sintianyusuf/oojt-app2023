<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir.create');
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
            'nama_lengkap' => '',
            'nim' => '',
            'semester' => '',
            'jenis_kelamin' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'agama' => '',
            'alamat' => '',
            'no_hp' => '',
            'ukuran_baju' => '',
            'slip_pembayaran' => '',
            'transkip_nilai' => '',
            'ktm' => '',
            'pas_photo' => '',
        ]);

        Mahasiswa::create($ValidatedData);
        dd($ValidatedData);
        return redirect()->route('formulir.create');
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
    public function edit(Mahasiswa $formulir)
    {
        // return view('formulir.edit', compact('formulir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $formulir)
    {
        $ValidatedData = $request->validate([
            'nama_lengkap' => '',
            'nim' => '',
            'semester' => '',
            // 'jenis_kelamin' => '',
            // 'tempat_lahir' => '',
            // 'tanggal_lahir' => '',
            // 'agama' => '',
            // 'alamat' => '',
            // 'no_hp' => '',
            // 'ukuran_baju' => '',
            // 'slip_pembayaran' => '',
            // 'transkip_nilai' => '',
            // 'ktm' => '',
            // 'pas_photo' => '',
        ]);

        Mahasiswa::where('nim', $formulir->nim) ->update($ValidatedData);
        dd($ValidatedData);

        return redirect()->route('resume.index');
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
