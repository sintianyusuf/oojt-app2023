@extends('layouts.master')

@section('content')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ route('nilai2.update', $nilai2->id_nilai2)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nim">Nim <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nim" name="nim" value="{{$nilai2->nim}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{$nilai2->nama_mahasiswa}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="skil_input">SKIL INPUT DATA <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="skil_input" name="skil_input" value="{{$nilai2->skil_input}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="presentasi_kehadiran">PRESENTASI KEHADIRAN<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="presentasi_kehadiran" name="presentasi_kehadiran" value="{{$nilai2->presentasi_kehadiran}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nilai_p1">NILAI PENGUJI 1<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nilai_p1" name="nilai_p1" value="{{$nilai2->nilai_p1}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nilai_p2">NILAI PENGUJI 2<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nilai_p2" name="nilai_p2" value="{{$nilai2->nilai_p2}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="data_input">DATA YANG DIINPUT DARI9 INPUTAN<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="data_input" name="data_input" value="{{$nilai2->data_input}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="pekerjaan">PEKERJAAN YANG DIKERJAKAN DARI 6 PEKERJAAN<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{$nilai2->pekerjaan}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="total_nilai">TOTAL NILAI<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="total_nilai" name="total_nilai" value="{{$nilai2->total_nilai}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ket">Ket<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="ket" name="ket" value="{{$nilai2->ket}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
