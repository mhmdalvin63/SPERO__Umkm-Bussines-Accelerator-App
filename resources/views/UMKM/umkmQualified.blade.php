@extends('index')
@section('title', 'UMKM Qualified')
    
@section('content')
<div class="d-flex justify-content-end">
  <a href="#" class="btn btn-icon icon-left btn-primary my-2 ml-auto"><i class="far fa-edit"></i> Tambah</a>
  </div>
<table class="table">
    <thead  style="background-color: #6777ef !important;">
      <tr class="text-center">
        <th class="text-white" scope="col">No</th>
        <th class="text-white" scope="col">UMKM</th>
        <th class="text-white" scope="col">Status</th>
      </tr>
    </thead>
    <tbody class="table-group-divider text-center">
      <tr>
        <th scope="row">1</th>
        <td>UMKM Mark</td>
        <td><div class="badge badge-success">Qualified</div></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>UMKM Jacob</td>
        <td><div class="badge badge-danger">Not Qualified</div></td>
      </tr>
      {{-- <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>

@endsection