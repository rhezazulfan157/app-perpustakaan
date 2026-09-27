<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private array $members = [
        ['id' => 1, 'nama' => 'Budi Santoso', 'nim' => '2021001', 'email' => 'budi@kampus.ac.id', 'nomor_telepon' => '081234567890', 'alamat' => 'Jl. Merdeka No. 1, Jakarta', 'status' => 'aktif'],
        ['id' => 2, 'nama' => 'Siti Rahayu', 'nim' => '2021002', 'email' => 'siti@kampus.ac.id', 'nomor_telepon' => '082345678901', 'alamat' => 'Jl. Sudirman No. 5, Bandung', 'status' => 'aktif'],
        ['id' => 3, 'nama' => 'Ahmad Fauzi', 'nim' => '2021003', 'email' => 'ahmad@kampus.ac.id', 'nomor_telepon' => '083456789012', 'alamat' => 'Jl. Diponegoro No. 10, Surabaya', 'status' => 'tidak aktif'],
    ];

    public function index()
    {
        $members = $this->members;

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}
