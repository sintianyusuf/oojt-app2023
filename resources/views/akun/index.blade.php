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
                                    <a style="float: right" href="{{route('akun.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Tambah User</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($akun as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->level}}</td>
                                                    <td>
                                                        <form action="{{ route('akun.destroy', $item->id) }}" method="POST">
                                                        <a  href="{{route('akun.edit', $item->id)}}" class="btn  btn-rounded btn-outline-primary">Edit User</a>
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