@extends('nilaikuliah.template')

@section('title', 'Data Nilai Kuliah')

@section('konten')

<a href="{{ route('nilaikuliah.create') }}"
   class="btn btn-primary">
    + Tambah Data
</a>

<br><br>

<table class="table table-bordered table-striped">

    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>

    @foreach($data as $d)

    <tr>

        <td>{{ $d->ID }}</td>
        <td>{{ $d->NRP }}</td>
        <td>{{ $d->NilaiAngka }}</td>
        <td>{{ $d->SKS }}</td>
        <td>{{ $d->NilaiHuruf }}</td>
        <td>{{ $d->Bobot }}</td>

    </tr>

    @endforeach

</table>

@endsection
