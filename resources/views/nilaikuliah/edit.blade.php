@extends('nilaikuliah.template')

@section('title', 'Edit Data')

@section('konten')

    <h2>Edit Data Nilai Kuliah</h2>

    <form action="{{ route('nilaikuliah.update', $data->ID) }}" method="POST">

        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" value="{{ $data->NRP }}">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" value="{{ $data->NilaiAngka }}">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" value="{{ $data->SKS }}">
        </p>

        <button type="submit">Update</button>

    </form>

@endsection
