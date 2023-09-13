<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Contracts\Queue\Monitor;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitoring = Monitoring::all();
       return view('monitoring.index', compact('monitoring'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monitoring.create');
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
            'lokasi' => '',
            'keterangan' => '',
        ]);

       Monitoring::create($ValidatedData);
        return redirect() -> route('monitoring.index');
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
    public function edit( Monitoring $monitoring)
    {
        return view('monitoring.edit', compact('monitoring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Monitoring $monitoring)
    {
        $ValidatedData = $request->validate([
            'tanggal' => '',
            'lokasi' => '',
            'keterangan' => '',
        ]);


        // User::create($ValidatedData);
        Monitoring::where('id_monitoring', $monitoring->id_monitoring) ->update($ValidatedData);
        return redirect() -> route('monitoring.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Monitoring $monitoring)
    {
       Monitoring::destroy($monitoring->id_monitoring);
        return redirect()->route('monitoring.index');
    }
}
