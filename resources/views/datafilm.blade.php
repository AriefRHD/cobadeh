@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Dashboard v3</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card mx-auto" style="width: 60rem">
        <div class="card-body">
            <div class="container-fluid ms-5">
                <h1 class="text-center  mb-3">Cinemaxd Movie Review</h1>
                <a href="/tambahdata" class="btn btn-success mb-3">Tambah Review</a>
                @if ($pesan = Session::get('Success'))
                <div class="alert alert-success mt-1" role="alert">
                    {{ $pesan }}
                </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr class="row">
                            <th class="col-1">No</th>
                            <th class="col-2">Nama Film</th>
                            <th class="col-1">Genre Film</th>
                            <th class="col-1">Tahun Rilis</th>
                            <th class="col-1">Rating Film</th>
                            <th class="col-5">Review Singkat</th>
                            <th class="col-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr class="row">
                            <th class="col-1">{{ $no++ }}</th>
                            <td class="col-2">{{ $row->nama }}</td>
                            <td class="col-1">{{ $row->genre }}</td>
                            <td class="col-1">{{ $row->tahun }}</td>
                            <td class="col-1">{{ $row->rating }}</td>
                            <td class="col-5">{{ $row->review }}</td>
                            <td class="col-1">
                                <a href="/tampildata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
