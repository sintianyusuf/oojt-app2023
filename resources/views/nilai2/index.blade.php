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
                                    <a style="float: right" href="{{route('nilai2.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Tambah Data</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nim</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>SKIL INPUT DATA</th>
                                                <th>PRESENTASI KEHADIRAN</th>
                                                <th>NILAI PENGUJI 1</th>
                                                <th>NILAI PENGUJI 2</th>
                                                <th>DATA YANG DIINPUT DARI 9 INPUTAN</th>
                                                <th>PEKERJAAN YANG DIKERJAKAN DARI 6 PEKERJAAN</th>
                                                <th>Total Nilai</th>
                                                <th>KET</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nilai2 as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->nim}}</td>
                                                    <td>{{$item->nama_mahasiswa}}</td>
                                                    <td>{{$item->skil_input}}</td>
                                                    <td>{{$item->presentasi_kehadiran}}</td>
                                                    <td>{{$item->nilai_p1}}</td>
                                                    <td>{{$item->nilai_p2}}</td>
                                                    <td>{{$item->data_input}}</td>
                                                    <td>{{$item->pekerjaan}}</td>
                                                    <td>{{$item->total_nilai}}</td>
                                                    <td>{{$item->ket}}</td>

                                                    <td>
                                                        <form action="{{ route('nilai2.destroy', $item->id_nilai2) }}" method="POST">
                                                        <a  href="{{route('nilai2.edit', $item->id_nilai2)}}" class="btn  btn-rounded btn-outline-primary">Edit Data</a>
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
