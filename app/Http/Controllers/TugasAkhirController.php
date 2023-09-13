<?php

namespace App\Http\Controllers;

use App\Models\Tugasakhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugasakhir = Tugasakhir::all();
       return view('tugasakhir.index', compact('tugasakhir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugasakhir.create');
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
            // 'nama_mahasiswa' => 'required',
            'lokasi' => 'required',
            'upload_file' => 'required',

        ]);

        $ValidatedData['mhs_nim'] = Auth::user()->mahasiswa->nim;

        if($request->file('upload_file')){
            $uploadPath = 'post-upload_file';
            $filename = $request->file('upload_file')->getClientOriginalName();
            $ValidatedData['upload_file'] = $request->file('upload_file')->storeAs($uploadPath, $filename);
        }

       Tugasakhir::create($ValidatedData);
        return redirect() -> route('tugasakhir.index');
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
    public function edit(Tugasakhir $tugasakhir)
    {
        return view('tugasakhir.edit', compact('tugasakhir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugasakhir $tugasakhir)
    {
        $ValidatedData = $request->validate([
            // 'nama_mahasiswa' => 'required',
            'lokasi' => 'required',
            'upload_file' => 'required',

        ]);

         // User::create($ValidatedData);
         Tugasakhir::where('id_tugasakhir', $tugasakhir->id_tugasakhir) ->update($ValidatedData);
         return redirect() -> route('tugasakhir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Tugasakhir $tugasakhir)
    {
        Tugasakhir::destroy($tugasakhir->id_tugasakhir);
        return redirect()->route('tugasakhir.index');
    }
}
