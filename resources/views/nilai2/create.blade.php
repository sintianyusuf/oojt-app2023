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
                                    <form class="form-valide" action="{{ route('nilai2.store')}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nim">Nim <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nim" name="nim" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="skil_input">SKIL INPUT DATA <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="skil_input" name="skil_input" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="presentasi_kehadiran">PRESENTASI KEHADIRAN <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="presentasi_kehadiran" name="presentasi_kehadiran" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nilai_p1">NILAI PENGUJI 1 <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nilai_p1" name="nilai_p1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nilai_p2">NILAI PENGUJI 2 <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nilai_p2" name="nilai_p2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="data_input">DATA YANG DIINPUT DARI 9 INPUTAN <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="data_input" name="data_input" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="pekerjaan">PEKERJAAN YANG DIKERJAKAN DARI 6 PEKERJAAN <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="total_nilai">Total Nilai <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="total_nilai" name="total_nilai" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ket">Ket <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="ket" name="ket" placeholder="">
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
