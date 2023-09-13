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
                                <h4 class="card-title">Daftar Surat Izin</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                    <a style="float: right" href="{{route('suratizin.create')}}" class="btn mb-1 btn-rounded btn-outline-primary">Buat Surat</a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($suratizin as $item)
                                                 <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->mahasiswa->nama_mahasiswa}}</td>
                                                    <td>{{$item->tanggal}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>
                                                        @canany(['mhs-access'])
                                                        <form action="{{ route('suratizin.destroy', $item->id_suratizin) }}" method="POST">
                                                        <a  href="{{route('suratizin.edit', $item->id_suratizin)}}" class="btn  btn-rounded btn-outline-primary">Edit Data</a>
                                                            @csrf
                                                            @method('DELETE')
                                                         <button type="submit"  class="btn btn-rounded btn-outline-danger">Hapus User</button>
                                                        </form>
                                                        @endcanany

                                                        @canany(['dpl-access'])
                                                        <form id="update-status-form" action="{{ route('suratizin.updatestatus', $item->id_suratizin) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('put') }}

                                                            <select id="status" name="status" onchange="showConfirmation()">
                                                                <option value="{{ $item->id_suratizin }}">{{ $item->status }}</option>
                                                                <option value="proses">Proses</option>
                                                                <option value="setuju">Setuju</option>
                                                                <option value="tidak setuju">Tidak Setuju</option>
                                                            </select>
                                                            </form>
                                                        @endcanany

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


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function showConfirmation() {
                var selectedStatus = $("#status option:selected").val();
                var confirmationMessage = "Anda yakin ingin mengubah status menjadi " + selectedStatus + "?";
                var isConfirmed = confirm(confirmationMessage);

                if (isConfirmed) {
                    // Use jQuery to submit the form
                    $("#update-status-form").submit();
                } else {
                    // Optionally, you can handle the case when the user cancels the confirmation
                    // For example, you can show a message or take other actions if needed.
                }
            }
        </script>

@endsection
