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
                                    <form class="form-valide" action="{{ route('resume.update', $resume->nim)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_mahasiswa">Nama Mahasiswa <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{$resume->nama_mahasiswa}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nim">Nim <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nim" name="nim" value="{{$resume->nim}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="semester">Semester <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="semester" name="semester" value="{{$resume->semester}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki"{{$resume->jenis_kelamin === 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                                    <option value="perempuan"{{$resume->jenis_kelamin === 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$resume->tempat_lahir}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  id="mdate" name="tanggal_lahir" value="{{$resume->tanggal_lahir}}">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="agama_id">Agama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="agama_id" name="agama_id">
                                                    <option value=""> Pilih Agama</option>
                                                    @foreach ($agama as $itm )
                                                        <option value="{{$itm->agama_id}}" @if ($resume->agama_id === $itm->agama_id) selected
                                                        @endif>{{$itm->nama_agama}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="alamat">Alamat <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$resume->alamat}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="no_hp">No Hp <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$resume->no_hp}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ukuran_baju">Ukuran Baju <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="ukuran_baju" name="ukuran_baju" value="{{$resume->ukuran_baju}}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="slip_pembayaran">Slip Pembayaran <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="file" id="slip_pembayaran" name="slip_pembayaran">
                                              </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="transkip">Transkip Nilai <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="file" id="transkip" name="transkip">
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ktm">KTM<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="file" id="ktm" name="ktm">
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="pas_photo">Pas Photo<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="file" id="pas_photo" name="pas_photo">
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" style="float: right">Simpan data</button>
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

