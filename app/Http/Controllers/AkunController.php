<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = User::all();
        return view('akun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('akun.create');
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required'],
            'password' => 'required|max:8',
            'level' => 'required'
        ]);

        $ValidatedData['password'] = Hash::make($request->password);

       $user = User::create($ValidatedData);

        if($ValidatedData['level'] === 'mhs'){
            $mhsdata = [
                'user_id' => $user->id,
                'nama_mahasiswa' => $ValidatedData['name']
            ];

            Mahasiswa::create($mhsdata);
        }
        return redirect() -> route('akun.index');

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
    public function edit(User $akun)
    {
        // $user = User::all();
        return view('akun.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $akun)
    {
        $ValidatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        // $ValidatedData['password'] = Hash::make($request->password);

        // User::create($ValidatedData);
        User::where('id', $akun->id) ->update($ValidatedData);
        return redirect() -> route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $akun)
    {
       User::destroy($akun->id);
       return redirect()->route('akun.index');
    }
}
