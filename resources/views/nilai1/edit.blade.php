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
                                    <form class="form-valide" action="{{ route('nilai1.update', $nilai1->id_nilai1)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{$nilai1->nama_mahasiswa}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nk1">NK1<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nk1" name="nk1" value="{{$nilai1->nk1}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nk2">NK2<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nk2" name="nk2" value="{{$nilai1->nk2}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nk3">NK3<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nk3" name="nk3" value="{{$nilai1->nk3}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nk4">NK4<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nk4" name="nk4" value="{{$nilai1->nk4}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nk5">NK5<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nk5" name="nk5" value="{{$nilai1->nk5}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="jumlah">JUMLAH<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{$nilai1->jumlah}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ip">IP<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="ip" name="ip" value="{{$nilai1->ip}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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
