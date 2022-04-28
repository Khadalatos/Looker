<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('lowongan.index', compact('lowongans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_low');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lowongan::create($request->except(['_token']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);

        return $lowongan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lowongan = Lowongan::findOrFail($id);

        return view('lowongan.edit', compact('lowongan'));
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
        $request->validate([
            'jabatan' => ['required', 'string'],
            'gaji' => ['numeric'],
            'desk_pek.' => ['string'],
            'skill' => ['string'],
            'edukasi' => ['string'],
            'pengalaman' => ['string'],
            'lowtersedia' => ['numeric'],
            'sifat' => ['string']

        ]);

        $lowongan = Lowongan::findOrFail($id);
        $lowongan->update([
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'desk_pek' => $request->desk_pek,
            'skill' => $request->skill,
            'edukasi' => $request->edukasi,
            'pengalaman' => $request->pengalaman,
            'lowtersedia' => $request->lowtersedia,
            'sifat' => $request->sifat,

        ]);

        return redirect()->route('admin.lowongan.index')->with('status', 'Lowongan updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lowongan::destroy($id);

        return redirect()->route('admin.lowongan.index')->with('success', 'Postingan Terhapus layaknya keadilan !');
    }
}
