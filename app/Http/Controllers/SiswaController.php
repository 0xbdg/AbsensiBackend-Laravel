<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public $jurusan = [
        "PPLG",
        "DKV",
        "KULINER",
        "PERHOTELAN",
        "AKUNTANSI"
    ];

    public $kelas = [
        "X",
        "XI",
        "XII"
    ];

    public function api($uid){
        $siswa = Siswa::where("uid","=",$uid)->firstOrFail();

        return response()->json([
            "uid" => $siswa->uid,
            "nama" => $siswa->nama,
            "kelas" => $siswa->kelas,
            "jurusan" => $siswa->jurusan,
            "walas" => $siswa->walas
        ]);
    }

    public function index(Request $request)
    {
        $items = Siswa::paginate(10);
        $jurusan = $this->jurusan;
        $kelas = $this->kelas;

        $query1 = $request->query("jurusan");
        $query2 = $request->query("kelas");

        if ($query1){
            $items = Siswa::where("jurusan", "like", "%{$query1}%")->paginate(10);
        }
        if ($query2){
            $items = Siswa::where("kelas", "like", "%{$query2}%")->paginate(10);
        }
        return view("student_view", compact("items", "kelas", "jurusan"));
    }

    public function create()
    {
        $jurusan = $this->jurusan;
        $kelas = $this->kelas;
        return view("student.create", compact("jurusan", "kelas"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'walas' => 'required'
        ]);

        Siswa::create($request->all());
        return redirect()->route("student");
    }

    public function show(Siswa $siswa)
    {
        //
    }

    public function edit(Siswa $siswa, $id)
    {
        $item = $siswa->find($id);
        $jurusan = $this->jurusan;
        $kelas = $this->kelas;
        return view("student.edit", compact("item", "kelas", "jurusan"));
    }

    public function update(Request $request, Siswa $siswa, $id)
    {
        $item = $siswa->find($id);
        $item->update($request->validate([
            'uid'=>"required",
            'nama'=>"required",
            'kelas'=>"required",
            'jurusan'=>"required",
            'walas' =>"required"
        ]));

        return redirect()->route("student");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa, $id)
    {
        $item = $siswa->find($id);
        $item->delete();

        return redirect()->route("student");
    }
}
