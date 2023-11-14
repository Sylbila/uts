@extends('uts.index')
@section('contentuts1')
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-6 shadow-sm h-md-250 position-relative p-4 m-5">
        <div class="col-md-8 p-3 d-flex flex-column position-static order-md-last">
        <h3 class="font-semibold text-primary">Nim: {{ $data['nim'] }}</h3>
        <h3 class="font-semibold text-primary">Nama: {{ $data['nama'] }}</h3>
        <h3 class="font-semibold text-primary">Jurusan: {{ $data['jurusan'] }}</h3>
        <h3 class="font-semibold text-primary">Alamat: {{ $data['alamat'] }}</h3>
        <h3 class="font-semibold text-primary">No.Hp: {{ $data['no_hp'] }}</h3>
        <h3 class="font-semibold text-primary">Hobi: {{ $data['hobi'] }}</h3>
        <h3 class="font-semibold text-primary">Moto Hidup: {{ $data['moto_hidup'] }}</h3>
        <div class="col-md-4 p-3 d-lg-block">
        <img class="img-fluid" width="300" height="350" src="{{ asset('asset-uts/lib/img/foto.jpeg') }}" role="img" alt="Foto">
        </div>
      </div>
  </div>
@endsection