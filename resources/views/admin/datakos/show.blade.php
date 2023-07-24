@extends('admin.layout.master')

@section('title' ,'Detail Kos')

@section('content')
    <section class="section">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title fs-3">{{$data->nama_kos}}, akun : {{$data->user->name}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tipe_kamar" >Tipe Kamar</label>
                                        @if ($data->tipe_kamar == 1)
                                            <input type="text" id="tipe_kamar" class="form-control" name="tipe_kamar" value="Putra" disabled>
                                        @elseif ($data->tipe_kamar == 2)
                                            <input type="text" id="tipe_kamar" class="form-control" name="tipe_kamar" value="Putri" disabled>
                                        @elseif ($data->tipe_kamar == 3)
                                            <input type="text" id="tipe_kamar" class="form-control" name="tipe_kamar" value="Campur" disabled>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_pengelola">Nama Pengelola Kos</label>
                                        <input type="text" id="nama_pengelola" class="form-control" name="nama_pengelola" value="{{$data->nama_pengelola}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_hp_pengelola">No Hp Pengelola Kos</label>
                                        <input type="text" id="no_hp_pengelola" class="form-control" name="no_hp_pengelola" value="{{$data->no_hp_pengelola}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Kos</label>
                                        <textarea type="text" id="deskripsi" class="form-control" name="deskripsi" disabled>{{$data->deskripsi}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="peraturan">Peraturan</label>
                                        <textarea type="text" id="peraturan" class="form-control" name="peraturan" disabled >{{$data->peraturan}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_umum">Fasilitas Umum</label>
                                        <textarea type="text" id="fasilitas_umum" class="form-control" name="fasilitas_umum" disabled >{{$data->fasilitas_umum}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_kamar">Fasilitas Kamar</label>
                                        <textarea type="text" id="fasilitas_kamar" class="form-control" name="fasilitas_kamar" disabled >{{$data->fasilitas_kamar}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_kamar_mandi">Fasilitas Kamar Mandi</label>
                                        <textarea type="text" id="fasilitas_kamar_mandi" class="form-control" name="fasilitas_kamar_mandi" disabled >{{$data->fasilitas_kamar_mandi}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea type="text" id="alamat" class="form-control" name="alamat" disabled >{{$data->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="ukuran_kamar">Ukuran Kamar</label>
                                    <div class="form-group d-flex">
                                        <input type="number" id="p_kamar" class="form-control" name="p_kamar" disabled value="{{$data->p_kamar}}">
                                        <label for="ukuran_kamar" class="mt-1 mx-3"><i class="bi bi-x"></i></i></label>
                                        <input type="number" id="l_kamar" class="form-control" name="l_kamar" disabled value="{{$data->l_kamar}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="jlh_kamar">Jumlah Kamar</label>
                                        <input type="number" id="jlh_kamar" class="form-control" name="jlh_kamar" disabled value="{{$data->jlh_kamar}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Harga</label>
                                        <input type="number" id="harga" class="form-control" name="harga" disabled value="{{$data->harga}}">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Our Gallery</h5>
                </div>
                <div class="card-body">
                    <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_bgnan_tampak_depan != null)
                                    <img class="w-100" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_tampak_depan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Bangunan Tampak Depan Kos</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Bangunan Tampak Depan Kos</p>
                                @endif
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_bgnan_dalam != null)
                                    <img class="w-100" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dalam)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Dalam Bangunan Kos</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Dalam Bangunan Kos</p>
                                @endif
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_bgnan_dari_jalan != null)
                                    <img class="w-100" src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dari_jalan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Bangunan Dari Jalan</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Bangunan Dari Jalan</p>
                                @endif
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_km_depan != null)
                                    <img class="w-100" src="{{asset('storage/galeri_kos/'. $data->foto_km_depan)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Depan Kamar</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Depan Kamar</p>
                                @endif
                            </a>
                        </div>
                    </div>
                    
                    <div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_km_dalam != null)
                                    <img class="w-100 active" src="{{asset('storage/galeri_kos/'. $data->foto_km_dalam)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Dalam Kamar</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Dalam Kamar</p>
                                @endif
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                @if ($data->foto_km_mandi != null)
                                    <img class="w-100" src="{{asset('storage/galeri_kos/'. $data->foto_km_mandi)}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Foto Kamar Mandi</p>
                                @else
                                    <p class="text-sm-start d-flex justify-content-center mt-2">Belum ada foto Kamar Mandi</p>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection