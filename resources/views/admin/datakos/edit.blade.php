@extends('admin.layout.master')

@section('title', 'Edit Data')

@section('content')
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Form</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="{{route('data-kos.update', $data->id)}}" class="form form-vertical" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            
                            <div class="row match-height">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="h5">Nama Kos</label>
                                                                <input type="text" id="nama_kos" name="nama_kos" class="form-control" value="{{$data->nama_kos}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="last-name-column">Tipe Kamar</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tipe_kamar" value="1" id="tipe_kamar" {{ ($data->tipe_kamar=="1")? "checked" : "" }}>
                                                                    <label class="form-check-label" for="putra">
                                                                        Putra
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tipe_kamar" value="2" id="tipe_kamar" {{ ($data->tipe_kamar=="2")? "checked" : "" }}>
                                                                    <label class="form-check-label" for="putri">
                                                                        Putri
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="tipe_kamar" value="3" id="tipe_kamar" {{ ($data->tipe_kamar=="3")? "checked" : "" }}>
                                                                    <label class="form-check-label" for="campur">
                                                                        Campur
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="nama_pengelola" class="h5">Nama Pengelola Kos</label>
                                                                <input type="text" id="nama_pengelola" class="form-control" name="nama_pengelola" value="{{$data->nama_pengelola}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="no_hp_pengelola" class="h5">No Hp Pengelola Kos</label>
                                                                <input type="text" id="no_hp_pengelola" class="form-control" name="no_hp_pengelola" value="{{$data->no_hp_pengelola}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="deskripsi" class="h5">Deskripsi Kos</label>
                                                                <textarea type="text" id="deskripsi" class="form-control" name="deskripsi">{{$data->deskripsi}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="peraturan" class="h5">Peraturan</label>
                                                                <textarea type="text" id="peraturan" class="form-control" name="peraturan">{{$data->peraturan}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <label for="nama_kos" class="col-12 h5 mt-5">Foto bangunan tampak depan</label>
                                                            @if ($data->foto_bgnan_tampak_depan == null)
                                                                <span class="badge bg-danger m-2">foto belum diupload</span>
                                                            @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_tampak_depan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                                            @endif
                                                            <input type="file" id="foto_bgnan_tampak_depan" name="foto_bgnan_tampak_depan" class="form-control">
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="col-12 h5 mt-5">Foto tampilan dalam bangunan</label>
                                                                @if ($data->foto_bgnan_dalam == null)
                                                                    <span class="badge bg-danger m-2">foto belum diupload</span>
                                                                @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dalam)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                                                                @endif
                                                                <input type="file" id="foto_bgnan_dalam" name="foto_bgnan_dalam" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="col-12 h5 mt-5">Foto tampak dari jalan</label>
                                                                @if ($data->foto_bgnan_dari_jalan == null)
                                                                    <span class="badge bg-danger m-2">foto belum diupload</span>
                                                                @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dari_jalan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                                                                @endif
                                                                <input type="file" id="foto_bgnan_dari_jalan" name="foto_bgnan_dari_jalan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="col-12 h5 mt-5">Foto depan kamar</label>
                                                                @if ($data->foto_km_depan == null)
                                                                    <span class="badge bg-danger m-2">foto belum diupload</span>
                                                                @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_km_depan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                                                @endif
                                                                <input type="file" id="foto_km_depan" name="foto_km_depan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="col-12 h5 mt-5">Foto dalam kamar</label>
                                                                @if ($data->foto_km_dalam == null)
                                                                    <span class="badge bg-danger m-2">foto belum diupload</span>
                                                                @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_km_dalam)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                                                @endif
                                                                <input type="file" id="foto_km_dalam" name="foto_km_dalam" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos" class="col-12 h5 mt-5">Foto kamar mandi</label>
                                                                @if ($data->foto_km_mandi == null)
                                                                    <span class="badge bg-danger m-2">foto belum diupload</span>
                                                                @else
                                                                <img class="w-100 m-2" src="{{asset('storage/galeri_kos/'. $data->foto_km_mandi)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                                                @endif
                                                                <input type="file" id="foto_km_mandi" name="foto_km_mandi" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="fasilitas_umum" class="h5">Fasilitas Umum</label>
                                                                <textarea type="text" id="fasilitas_umum" class="form-control" name="fasilitas_umum">{{$data->fasilitas_umum}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="fasilitas_kamar" class="h5">Fasilitas Kamar</label>
                                                                <textarea type="text" id="fasilitas_kamar" class="form-control" name="fasilitas_kamar">{{$data->fasilitas_kamar}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="fasilitas_kamar_mandi" class="h5">Fasilitas Kamar Mandi</label>
                                                                <textarea type="text" id="fasilitas_kamar_mandi" class="form-control" name="fasilitas_kamar_mandi">{{$data->fasilitas_kamar_mandi}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="alamat" class="h5">Alamat</label>
                                                                <textarea type="text" id="alamat" class="form-control" name="alamat">{{$data->alamat}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <label for="ukuran_kamar" class="h5">Ukuran Kamar</label>
                                                            <div class="input-group mb-3">
                                                                <input type="number" id="p_kamar" class="form-control" name="p_kamar" value="{{$data->p_kamar}}">
                                                                <span class="input-group-text">X</span>
                                                                <input type="number" id="l_kamar" class="form-control" name="l_kamar" value="{{$data->l_kamar}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="jlh_kamar" class="h5">Jumlah Kamar</label>
                                                                <input type="number" id="jlh_kamar" class="form-control" name="jlh_kamar" value="{{$data->jlh_kamar}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="form-group">
                                                                <label for="alamat" class="h5">Harga</label>
                                                                <input type="number" id="harga" class="form-control" name="harga" value="{{$data->harga}}">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection