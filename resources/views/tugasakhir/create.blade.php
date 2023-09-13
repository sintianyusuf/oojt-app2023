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
                                    <form class="form-valide" action="{{ route('tugasakhir.store')}}" method="post">
                                        @csrf
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa <span </span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="">
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="lokasi">Lokasi <span </span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="upload_file">Laporan <span </span>
                                            </label>
                                            <form>
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file">
                                                </div>
                                            </form>
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
