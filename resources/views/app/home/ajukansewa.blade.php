{{-- AppController, ajukan sewa--}}

@extends('app.layout.master')

@section('title','Ajukan Sewa')
@section('headertitle','Form Ajukan Sewa')

@section('content')
    
<section class="row">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <span class="fs-3 fw-bolder text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                        Detail Kos
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <p class="fw-bold text-capitalize">{{$data->nama_kos}}</p>
                        <label class="">Harga : </label>
                        <p class="ms-2 fst-italic">@currency($data->harga) / bulan</p>
                        <hr>
                        <label class="">Alamat : </label>
                        <p class="ms-2 fst-italic">{{$data->alamat}}</p>
                        <hr>
                        <label class="">Ukuran Kamar : </label>
                        <p class="ms-2 fst-italic">{{$data->p_kamar}} X {{$data->l_kamar}} m</p>
                        <hr>
                        <label class="">Peraturan : </label>
                        <p class="ms-2 fst-italic">{{$data->peraturan}}</p>
                        <hr>
                        <label class="">Fasilitas Umum : </label>
                        <p class="ms-2 fst-italic">{{$data->fasilitas_umum}}</p>
                        <hr>
                        <label class="">Fasilitas Kamar : </label>
                        <p class="ms-2 fst-italic">{{$data->fasilitas_kamar}}</p>
                        <hr>
                        <label class="">Fasilitas Kamar Mandi : </label>
                        <p class="ms-2 fst-italic">{{$data->fasilitas_kamar_mandi}}</p>
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
                    <form class="form" action="{{route('ajukan-sewa.store')}}" method="POST">
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
                                    <input type="number" id="no_hp" class="form-control" name="no_hp" placeholder="*no WhastApp anda akan di kontak oleh admin.">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="tanggal_masuk">Tanggal Masuk</label>
                                    <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="display: none">
                                <div class="form-group">
                                    <label for="kos_id">Nama Kos</label>
                                    <input type="number" id="kos_id" name="kos_id" value="{{$data->id}}" class="form-control">
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
                                    <label for="nama_kampus">Nama Kampus /Asal Instansi</label>
                                    <input type="text" id="nama_kampus" class="form-control" name="nama_kampus">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="asal_kota">Asal Daerah /Kota</label>
                                    <input type="text" id="asal_kota" class="form-control" name="asal_kota">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="no_rek">No Rekening yang ingin transfer</label>
                                    <input type="text" id="no_rek" class="form-control" name="no_rek">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_rek">Nama Rekening yang ingin transfer</label>
                                    <input type="text" id="nama_rek" class="form-control" name="nama_rek">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="jumlah_tf">Jumlah uang yang di transfer</label>
                                    <input type="text" id="jumlah_tf" class="form-control" name="jumlah_tf">
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

@section('script')
<script type="text/javascript">
    var jumlah_tf = document.getElementById('jumlah_tf');
    jumlah_tf.addEventListener('keyup', function(e)
    {
        jumlah_tf.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@endsection