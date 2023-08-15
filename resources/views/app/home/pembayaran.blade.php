{{-- AppController, ajukan sewa--}}

@extends('app.layout.master')

@section('title','Pembayaran Kos')
@section('headertitle','Form Pembayaran Sewa')

@section('content')
    
<section class="row">
    
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <span class="fs-3 fw-bolder text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                        Riwayat Transaksi
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-title">
                            <p class="fw-bold text-capitalize">{{$transaksidata->nama_penyewa}}</p>
                            <label class="">Harga : </label>
                            <p class="ms-2 fst-italic">@currency($transaksidata->kos_data->harga) / bulan</p>
                            <p class="ms-2 fst-bold text-danger fs-6">*Silahkan melakukan transfer</p>
                            <hr>
                            <label class="">Nama Kos : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->kos_data->nama_kos}}</p>
                            <hr>
                            <label class="">Jenis Kelamin : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->jenis_kelamin}}</p>
                            <hr>
                            <label class="">Tanggal Lahir : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->tanggal_lahir}}</p>
                            <hr>
                            <label class="">Nama Kampus / Asal Instansi : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->nama_kampus}}</p>
                            <hr>
                            <label class="">Status : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->status}}</p>
                            <hr>
                            <label class="">No Hp : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->no_hp}}</p>
                            <hr>
                            <label class="">Asal Kota / Daerah : </label>
                            <p class="ms-2 fst-italic">{{$transaksidata->asal_kota}}</p>
                            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="card">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_penyewa">Nama Penyewa</label>
                                    <input type="text" id="nama_penyewa" name="nama_penyewa" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="no_hp">No Hp Aktif (WhatsApp)</label>
                                    <input type="number" id="no_hp" class="form-control" name="no_hp">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Jenis Kelamin</label>
                                <div class="form-group">
                                    <select name="jenis_kelamin" class="form-select" id="basicSelect">
                                        <option selected >--  Jenis kelamin  --</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Pekerjaan</label>
                                <div class="form-group">
                                    <select name="pekerjaan" class="form-select" id="basicSelect">
                                        <option selected >--  Pekerjaan  --</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Pelajar">Pelajar</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Dosen">Dosen</option>
                                        <option value="TNI">TNI</option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Status</label>
                                <div class="form-group">
                                    <select name="status" class="form-select" id="basicSelect">
                                        <option selected >--  Status Nikah  --</option>
                                        <option value="Lajang">Lajang</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Duda">Duda</option>
                                        <option value="Janda">Janda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_kampus">Nama Kampus /Asal Sekolah</label>
                                    <input type="text" id="nama_kampus" class="form-control" name="nama_kampus">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="asal_kota">Asal Daerah /Kota</label>
                                    <input type="text" id="asal_kota" class="form-control" name="asal_kota">
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="card" style="text-align:center">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-1" />
                                            <div class="card-body">
                                                <h4 class="card-title">Foto KTP</h4>
                                                <input type="file" id="input-1" name="foto_bgnan_tampak_depan" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Ajukan Sewa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection