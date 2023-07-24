<?php

namespace App\Http\Controllers;

use App\Models\KosData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemilik.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemilik.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'nama_kos' => 'required',
                'tipe_kamar' => 'required',
                // 'deskripsi' => 'required|min:5',
                'nama_pengelola' => 'required',
                'no_hp_pengelola' => 'numeric',
                'peraturan' => 'required',
                'foto_bgnan_tampak_depan' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'foto_bgnan_dalam' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'foto_bgnan_dari_jalan' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'foto_km_depan' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'foto_km_dalam' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'foto_km_mandi' => 'mimes:jpg,png,jpeg|image|max:2400|nullable',
                'fasilitas_kamar'  => 'required',
                'fasilitas_kamar_mandi'  => 'required',
                'fasilitas_umum'  => 'required',
                'alamat'  => 'required',
                'p_kamar' => 'required',
                'l_kamar' => 'required',
                'jlh_kamar' => 'required',
                'harga' => 'required',
            ],
            [
                'nama_kos.required' => 'Nama kos belum di isi',
                'tipe_kamar.required' => 'Tipe kamar belum di isi',
                // 'deskripsi.required' => 'Deskripsi belum di isi',
                'nama_pengelola.required' => 'Nama pengelola belum di isi',
                'no_hp_pengelola.numeric' => 'No hp pengelola harus di isi dengan angka',
                'peraturan.required' => 'Peraturan belum di isi',
                'fasilitas_kamar.required' => 'Fasilitas kamar belum di isi',
                'fasilitas_kamar_mandi.required' => 'Fasilitas kamar belum di isi',
                'fasilitas_umum.required' => ' Fasilitas umum belum di isi',
                'alamat.required' => ' Alamat belum di isi',
                'p_kamar.required' => 'Ukuran kamar belum diisi',
                'l_kamar.required' => 'Ukuran kamar belum diisi',
                'jlh_kamar.required' => 'Jumlah kamar belum diisi',
                'harga.required' => 'Harga belum diisi',
                'foto_bgnan_tampak_depan.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_bgnan_dalam.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_bgnan_dari_jalan.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_km_depan.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_km_dalam.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_km_mandi.mimes' => 'Ekstensi hanya berfromat jpg, jpeg, png',
                'foto_bgnan_tampak_depan.image' => 'File hanya berupa image',
                'foto_bgnan_tampak_depan.max' => 'Ukuran file max 2.4 mb',
                'foto_bgnan_dalam.image' => 'File hanya berupa image',
                'foto_bgnan_dalam.max' => 'Ukuran file max 2.4 mb',
                'foto_bgnan_dari_jalan.image' => 'File hanya berupa image',
                'foto_bgnan_dari_jalan.max' => 'Ukuran file max 2.4 mb',
                'foto_km_depan.image' => 'File hanya berupa image',
                'foto_km_depan.max' => 'Ukuran file max 2.4 mb',
                'foto_km_dalam.image' => 'File hanya berupa image',
                'foto_km_dalam.max' => 'Ukuran file max 2.4 mb',
                'foto_km_mandi.image' => 'File hanya berupa image',
                'foto_km_mandi.max' => 'Ukuran file max 2.4 mb',


            ]
        );

        if ($request->hasFile('foto_bgnan_tampak_depan', 'foto_bgnan_dalam', 'foto_bgnan_dari_jalan', 'foto_km_depan', 'foto_km_dalam', 'foto_km_mandi') == null) {
            $data = [
                'user_id' => Auth::id(),
                'nama_kos' => $request->nama_kos,
                'tipe_kamar' => $request->tipe_kamar,
                'deskripsi' => $request->deskripsi,
                'nama_pengelola' => $request->nama_pengelola,
                'no_hp_pengelola' => $request->no_hp_pengelola,
                'peraturan' => $request->peraturan,
                'foto_bgnan_tampak_depan' => $request->foto_bgnan_tampak_depan,
                'foto_bgnan_dalam' => $request->foto_bgnan_dalam,
                'foto_bgnan_dari_jalan' => $request->foto_bgnan_dari_jalan,
                'foto_km_depan' => $request->foto_km_depan,
                'foto_km_dalam' => $request->foto_km_dalama,
                'foto_km_mandi' => $request->foto_km_mandi,
                'fasilitas_kamar' => $request->fasilitas_kamar,
                'fasilitas_kamar_mandi' => $request->fasilitas_kamar_mandi,
                'fasilitas_umum' => $request->fasilitas_umum,
                'alamat' => $request->alamat,
                'p_kamar' => $request->p_kamar,
                'l_kamar' => $request->l_kamar,
                'jlh_kamar' => $request->jlh_kamar,
                'harga' => $request->harga,
            ];

            $create = KosData::create($data);
            return to_route('pemilik.index', compact('create'))->with('success', 'Data berhasil disimpan');
        }


        $bgn_tpk_dpn = $request->nama_kos . '-' . 'bangunan tampak depan' . time() . '.' . $request->foto_bgnan_tampak_depan->extension();
        $bgn_dlm = $request->nama_kos . '-' . 'dalam bangunan' . time() . '.' . $request->foto_bgnan_dalam->extension();
        $bgn_dr_jln = $request->nama_kos . '-' . 'bangunan dari jalan' . time() . '.' . $request->foto_bgnan_dari_jalan->extension();
        $ft_km_dpn = $request->nama_kos . '-' . 'depan kamar' . time() . '.' . $request->foto_km_depan->extension();
        $ft_km_dlm = $request->nama_kos . '-' . 'dalam kamar' . time() . '.' . $request->foto_km_dalam->extension();
        $ft_km_mdi = $request->nama_kos . '-' . 'kamar mandi' . time() . '.' . $request->foto_km_mandi->extension();

        $test = $request->foto_bgnan_tampak_depan->move(public_path('storage/galeri_kos'), $bgn_tpk_dpn);
        $request->foto_bgnan_dalam->move(public_path('storage/galeri_kos'), $bgn_dlm);
        $request->foto_bgnan_dari_jalan->move(public_path('storage/galeri_kos'), $bgn_dr_jln);
        $request->foto_km_depan->move(public_path('storage/galeri_kos'), $ft_km_dpn);
        $request->foto_km_dalam->move(public_path('storage/galeri_kos'), $ft_km_dlm);
        $request->foto_km_mandi->move(public_path('storage/galeri_kos'), $ft_km_mdi);

        $data = [
            'user_id' => Auth::id(),
            'nama_kos' => $request->nama_kos,
            'tipe_kamar' => $request->tipe_kamar,
            'deskripsi' => $request->deskripsi,
            'nama_pengelola' => $request->nama_pengelola,
            'no_hp_pengelola' => $request->no_hp_pengelola,
            'peraturan' => $request->peraturan,
            'foto_bgnan_tampak_depan' => $bgn_tpk_dpn,
            'foto_bgnan_dalam' => $bgn_dlm,
            'foto_bgnan_dari_jalan' => $bgn_dr_jln,
            'foto_km_depan' => $ft_km_dpn,
            'foto_km_dalam' => $ft_km_dlm,
            'foto_km_mandi' => $ft_km_mdi,
            'fasilitas_kamar' => $request->fasilitas_kamar,
            'fasilitas_kamar_mandi' => $request->fasilitas_kamar_mandi,
            'fasilitas_umum' => $request->fasilitas_umum,
            'alamat' => $request->alamat,
            'p_kamar' => $request->p_kamar,
            'l_kamar' => $request->l_kamar,
            'jlh_kamar' => $request->jlh_kamar,
            'harga' => $request->harga,
        ];

        $create = KosData::create($data);
        return to_route('pemilik.index', compact('create'))->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
