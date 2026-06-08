@extends('nilaikuliah.template')

@section('title', 'Tambah Data')

@section('konten')

    <h2>Tambah Data Nilai Kuliah</h2>

    <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">

        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="6">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" id="NilaiAngka">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" id="SKS">
        </p>

        <button type="submit">Simpan</button>

        <a href="{{ route('nilaikuliah.index') }}">
            <button type="button">Kembali</button>
        </a>

    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nilai = document.getElementById('NilaiAngka').value;
            let sks = document.getElementById('SKS').value;

            if (nrp == '') {
                Swal.fire({
                    title: 'Error',
                    text: 'NRP wajib diisi',
                    icon: 'error'
                });

                return false;
            }

            if (nrp.length > 6) {
                Swal.fire({
                    title: 'Error',
                    text: 'NRP maksimal 6 karakter',
                    icon: 'error'
                });

                return false;
            }

            if (nilai == '') {
                Swal.fire({
                    title: 'Error',
                    text: 'Nilai Angka wajib diisi',
                    icon: 'error'
                });

                return false;
            }

            if (sks == '') {
                Swal.fire({
                    title: 'Error',
                    text: 'SKS wajib diisi',
                    icon: 'error'
                });

                return false;
            }

            return true;
        }
    </script>

@endsection
