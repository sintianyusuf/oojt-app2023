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
                                    <form class="form-valide" action="{{ route('monitoring.update', $monitoring->id_monitoring)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tanggal">Tanggal <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{$monitoring->tanggal}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="lokasi">Lokasi<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$monitoring->lokasi}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="keterangan">Keterangan<span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$monitoring->keterangan}}">
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
