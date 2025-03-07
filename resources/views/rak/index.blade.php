@extends('layouts.app')

@section('title', 'Rak')

@section('content-header', 'Rak')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning d-inline">Data Rak</h6>
            <button class="btn btn-sm btn-success float-right d-inline" data-toggle="modal" data-target="#form-tambah">Tambah</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <table class="table table-hover dataTable" id="dataTable" width="100%" cellspacing="0"
                        role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Rak</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rak as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kode_rak}}</td>
                                <td>{{$item->rak}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td>
                                    <button class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#edit{{$item->id}}"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#delete{{$item->id}}"><i class="fas fa-trash"></i></button>
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
@include('rak.form')
@include('rak.edit')
@include('rak.delete')
@endsection
