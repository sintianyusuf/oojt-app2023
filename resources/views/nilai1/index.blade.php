@extends('layouts.master')

@section('content')

  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <!-- <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div> -->
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar User</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                    <a style="float: right" href="{{route('nilai1.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Tambah Nilai</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>NK1</th>
                                                <th>NK2</th>
                                                <th>NK3</th>
                                                <th>NK4</th>
                                                <th>NK5</th>
                                                <th>JUMLAH</th>
                                                <th>IP</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nilai1 as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->nama_mahasiswa}}</td>
                                                    <td>{{$item->nk1}}</td>
                                                    <td>{{$item->nk2}}</td>
                                                    <td>{{$item->nk3}}</td>
                                                    <td>{{$item->nk4}}</td>
                                                    <td>{{$item->nk5}}</td>
                                                    <td>{{$item->jumlah}}</td>
                                                    <td>{{$item->ip}}</td>

                                                    <td>
                                                        <form action="{{ route('nilai1.destroy', $item->id_nilai1) }}" method="POST">
                                                        <a  href="{{route('nilai1.edit', $item->id_nilai1)}}" class="btn  btn-rounded btn-outline-primary">Edit Data</a>
                                                            @csrf
                                                            @method('DELETE')
                                                         <button type="submit"  class="btn btn-rounded btn-outline-danger">Hapus User</button>

                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h4>Keterangan Penilaian</h4>
                            <h6>I Kompotensi Dasar 60%</h6>
                            <h6>II Disiplin 10%</h6>
                            <h6>III Etor Kerja 10%</h6>
                            <h6>IV Kehadiran 10%</h6>
                            <h6>V  Kerja Sama 10%</h6>
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
