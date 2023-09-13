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
                                    <form class="form-valide" action="{{ route('absenmhs.update', $absenmhs->id_absenmhs)}}" method="post">
                                        @csrf
                                        @method('put')
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{$absenmhs->nama_mahasiswa}}">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tanggal">Tanggal<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="tanggal" name="tanggal" rows="5" placeholder="">{{$absenmhs->tanggal}}</textarea>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tanggal">Tanggal <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mdate" name="tanggal" value="{{$absenmhs->tanggal}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gambar">Gambar <span class="text-danger">*</span>
                                            </label>
                                            <form>
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file">
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gambar">Gambar<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="gambar" name="gambar" rows="5" placeholder="What would you like to see?"value="{{$absenmhs->gambar}}"></textarea>
                                            </div>
                                        </div> --}}
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
