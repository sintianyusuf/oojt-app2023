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
                                    <form class="form-valide" action="{{ route('suratizin.store')}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tanggal">Tanggal <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mdate" name="tanggal" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="durasi">Durasi <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="durasi" name="durasi" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="keterangan">Keterangan <span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
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
