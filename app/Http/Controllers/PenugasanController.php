<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Penugasan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.penugasan.index', [
            'penugasan' => Penugasan::with('user')->get()
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
            'pages.penugasan.create'
        );
    }

    public function show(Penugasan $penugasan)
    {

        $dir = storage_path('app/penugasan');

        $file = $dir . '/' .  $penugasan->file;

        return response()->download($file, $penugasan->file);
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
            'judul' => 'required',
            'keterangan' => 'required',
            'skpd' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
        ]);

        Penugasan::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'skpd' => $request->skpd,
            'tgl_mulai' => Carbon::parse($request->tgl_mulai)->format('Y-m-d'),
            'tgl_selesai' => Carbon::parse($request->tgl_selesai)->format('Y-m-d'),
            'user_id' => Auth::user()->id
        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Penugasan berhasil ditambah.',
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
