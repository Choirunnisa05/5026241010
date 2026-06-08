<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // INDEX
    public function index()
    {
        $data = DB::table('nilaikuliah')->get();

        foreach ($data as $d) {

            // Nilai Huruf
            if ($d->NilaiAngka <= 40) {
                $d->NilaiHuruf = 'D';
            } elseif ($d->NilaiAngka <= 60) {
                $d->NilaiHuruf = 'C';
            } elseif ($d->NilaiAngka <= 80) {
                $d->NilaiHuruf = 'B';
            } else {
                $d->NilaiHuruf = 'A';
            }

            // Bobot
            $d->Bobot = $d->NilaiAngka * $d->SKS;
        }

        return view('nilaikuliah.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('nilaikuliah.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = DB::table('nilaikuliah')
            ->where('ID', $id)
            ->first();

        return view('nilaikuliah.edit', compact('data'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->update([
                'NRP' => $request->NRP,
                'NilaiAngka' => $request->NilaiAngka,
                'SKS' => $request->SKS
            ]);

        return redirect('/nilaikuliah');
    }

    // DELETE
    public function delete($id)
    {
        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->delete();

        return redirect('/nilaikuliah');
    }

    // READ DETAIL
    public function read($id)
    {
        $data = DB::table('nilaikuliah')
            ->where('ID', $id)
            ->first();

        return view('nilaikuliah.read', compact('data'));
    }
}
