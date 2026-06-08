@extends('nilaikuliah.template')

@section('title', 'Detail Data')

@section('konten')

<h2>Detail Nilai Kuliah</h2>

<p>ID : {{ $data->ID }}</p>
<p>NRP : {{ $data->NRP }}</p>
<p>Nilai Angka : {{ $data->NilaiAngka }}</p>
<p>SKS : {{ $data->SKS }}</p>

@endsection
