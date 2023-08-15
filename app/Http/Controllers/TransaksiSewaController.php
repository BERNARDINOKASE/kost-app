<?php

namespace App\Http\Controllers;

use App\Models\KosData;
use App\Models\TransaksiSewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $history = TransaksiSewa::where('user_id', Auth::user()->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penyewa' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'tanggal_lahir' => 'required',
            'nama_kampus' => 'required',
            'status' => 'required',
            'no_hp' => 'required',
            'asal_kota' => 'required',
            'no_rek' => 'required',
            'nama_rek' => 'required',
            'jumlah_tf' => 'required'
        ], [
            'nama_penyewa.required' => 'Nama penyewa belum diisi',
            'jenis_kelamin.required' => 'Jenis kelamin belum diisi',
            'pekerjaan.required' => 'Pekerjaan belum diisi',
            'tanggal_lahir.required' => 'Tanggal lahir belum diisi',
            'nama_kampus.required' => 'Asal sekolah atau asal kampus anda belum diisi',
            'status.required' => 'Status anda belum diisi',
            'no_hp.required' => 'No handphone anda belum diisi',
            'asal_kota.required' => 'Asal kota anda belum diisi',
            'no_rek.required' => 'No Rekening anda belum diisi',
            'nama_rek.required' => 'Nama Rekening anda belum diisi',
            'jumlah_tf.required' => 'Jumlah yang ditransfer belum diisi'
        ]);

        // $kos_id = KosData::where('id', '=', 'kos_id')->first();
        $data = [
            'user_id' => Auth::id(),
            'kos_id' => $request->input('kos_id'),
            'nama_penyewa' => $request->nama_penyewa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_kampus' => $request->nama_kampus,
            'status' => $request->status,
            'no_hp' => $request->no_hp,
            'asal_kota' => $request->asal_kota,
            'no_rek' => $request->no_rek,
            'nama_rek' => $request->nama_rek,
            'jumlah_tf' => $request->jumlah_tf
        ];

        TransaksiSewa::create($data);
        return redirect()->back()->with('message', 'Data penyewa berhasil disimpan, silahkan tunggu konfirmasi dari admin melalui no whatsapp yang telah anda isi di formulir.');
        // dd($create);
        // return to_route('app.ajukansewa')->with('success', 'Data penyewa berhasil diunggah silahkan lihat riwayat pemesanan anda.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiSewa  $transaksiSewa
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiSewa $transaksiSewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiSewa  $transaksiSewa
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiSewa $transaksiSewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiSewa  $transaksiSewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiSewa $transaksiSewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiSewa  $transaksiSewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TransaksiSewa::where('id', $id)->delete();
        return to_route('app.historytransaksi')->with('success', 'Transaksi Anda Dibatalkan');
    }
}
