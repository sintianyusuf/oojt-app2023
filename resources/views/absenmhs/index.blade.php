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
                                <h4 class="card-title">Daftar Hadir</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                    <a style="float: right" href="{{route('absenmhs.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Absensi</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th>Tanggal</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($absenmhs as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>

                                                    <td>{{$item->updated_at}}</td>
                                                    <td>
                                                        <img class="img-fluid mt-3" src="{{ asset('storage/' . $item->gambar)}}" style="width: 80px;">
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('absenmhs.destroy', $item->id_absenmhs) }}" method="POST">
                                                        <a  href="{{route('absenmhs.edit', $item->id_absenmhs)}}" class="btn  btn-rounded btn-outline-primary">Edit Data</a>
                                                            @csrf
                                                            @method('DELETE')
                                                         <button type="submit"  class="btn btn-rounded btn-outline-danger">Hapus User</button>

                                                        </form>
                                                        <from ></from>

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
