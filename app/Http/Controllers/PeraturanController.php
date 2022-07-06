<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peraturan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.peraturan.index', [
            'peraturan' => Peraturan::with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'pages.peraturan.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
            'jenis' => 'required',
            'nomor' => 'required',
            'tahun' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        $code = time();

        $dir = storage_path('app/peraturan');
        $fileName = $code . '_' . $file->getClientOriginalName();
        $moveFile = $file->move($dir, $fileName);

        if ($moveFile) {
            Peraturan::create([
                'kategori' => $request->kategori,
                'jenis' => $request->jenis,
                'nomor' => $request->nomor,
                'tahun' => $request->tahun,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'file' => $fileName,
                'user_id' => Auth::user()->id
            ]);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Peraturan berhasil ditambah.',
        ], Response::HTTP_CREATED);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.user.edit', [
            'item' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'nullable',
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'golongan' => 'required',
            'role' => 'required|in:admin,user',
        ]);

        $data = User::findOrFail($id);
        $data->username = $request->username;
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        $data->nama = $request->nama;
        $data->nip = $request->nip;
        $data->jabatan = $request->jabatan;
        $data->pangkat = $request->pangkat;
        $data->golongan = $request->golongan;
        $data->role = $request->role;
        $data->update();

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil diubah.',
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil dihapus.'
        ], Response::HTTP_ACCEPTED);
    }
}
