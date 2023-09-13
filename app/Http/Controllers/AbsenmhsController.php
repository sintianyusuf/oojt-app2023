<?php

namespace App\Http\Controllers;

use App\Models\Absenmahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AbsenmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenmhs = Absenmahasiswa::all();
        return view('absenmhs.index', compact('absenmhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('absenmhs.create');
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
            'mhs_nim' => '',
            // 'nama_mahasiswa' => 'required',
            'tanggal' => '',
            'gambar' => '',
        ]);

        $ValidatedData['mhs_nim'] = Auth::user()->mahasiswa->nim;

        if($request->file('gambar')){
            $uploadPath = 'post-gambar';
            $filename = $request->file('gambar')->getClientOriginalName();
            $ValidatedData['gambar'] = $request->file('gambar')->storeAs($uploadPath, $filename);
        }

       Absenmahasiswa::create($ValidatedData);
        return redirect() -> route('absenmhs.index');
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
    public function edit( Absenmahasiswa $absenmhs)
    {
        return view('absenmhs.edit', compact('absenmhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absenmahasiswa $absenmhs)
    {
        $ValidatedData = $request->validate([
            'mhs_nim' => '',
            // 'nama_mahasiswa' => 'required',
            'tanggal' => '',
            'gambar' => '',
        ]);

         // User::create($ValidatedData);
         Absenmahasiswa::where('id_absenmhs', $absenmhs->id_absenmhs) ->update($ValidatedData);
         return redirect() -> route('absenmhs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Absenmahasiswa $absenmhs)
    {
        Absenmahasiswa::destroy($absenmhs->id_absenmhs);
        return redirect()->route('absenmhs.index');
    }
}
