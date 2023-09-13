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
                                <h4 class="card-title">Laporan Magang</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                    <a style="float: right" href="{{route('tugasakhir.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Tambah Tugas</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Lokasi</th>
                                                <th>Laporan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tugasakhir as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->mahasiswa->nama_mahasiswa}}</td>
                                                    <td>{{$item->lokasi}}</td>
                                                    <td>{{$item->laporan}}</td>

                                                    <td>
                                                        <form action="{{ route('tugasakhir.destroy', $item->id_tugasakhir) }}" method="POST">
                                                        <a  href="{{route('tugasakhir.edit', $item->id_tugasakhir)}}" class="btn  btn-rounded btn-outline-primary">Edit Data</a>
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
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
