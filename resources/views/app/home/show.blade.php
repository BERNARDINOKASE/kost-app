@extends('app.layout.master')

@section('title', 'Lihat kos')

@section('content')
    <section class="row">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                {{-- <div class="card-header d-flex justify-content-center">
                    <h4 class="fs-2">{{$data->nama_kos}}</h4>
                </div> --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        @if ($data->foto_bgnan_tampak_depan == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_tampak_depan)}}" class="d-block w-100" alt="...">
                                        @endif
                                        <div class="carousel-caption d-none d-md-block ">
                                            <h5 class="text-primary">Foto Bangunan Tampak Depan</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        @if ($data->foto_bgnan_dalam == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dalam)}}" class="d-block w-100" alt="...">    
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-primary">Foto Bangunan Dari Dalam</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        @if ($data->foto_bgnan_dari_jalan == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_bgnan_dari_jalan)}}" class="d-block w-100" alt="..."> 
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-primary">Foto Bangunan Dari Jalan</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        @if ($data->foto_km_depan == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_km_depan)}}" class="d-block w-100" alt="..."> 
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-primary">Foto Depan Kamar</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        @if ($data->foto_km_dalam == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_km_dalam)}}" class="d-block w-100" alt="...">                                            
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-primary">Foto Dalam Kamar</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        @if ($data->foto_km_mandi == null)
                                            <img  class="d-block w-100" src="{{asset('assets/')}}/images/samples/home.jpeg"/>
                                        @else
                                            <img src="{{asset('storage/galeri_kos/'. $data->foto_km_mandi)}}" class="d-block w-100" alt="...">
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-primary">Foto Kamar Mandi</h5>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="card-title fs-1">{{$data->nama_kos}}</h4>
                            <h4 class="card-title">
                                {{$data->alamat}}
                            </h4>
                            <p for="" class="fw-semibold fs-4">Spesifikasi Kamar : </p>
                            <p href="#" class="card-text ms-3 fs-4">{{$data->p_kamar}} X {{$data->l_kamar}}m</p>
                            <hr>
                            <p for="" class="fw-semibold fs-4">Deskripsi : </p>
                            <p class="card-text ms-3 fs-4">{{$data->deskripsi}}</p>
                            <hr>
                            <p for="" class="fw-semibold fs-4">Peraturan : </p>
                            <p class="card-text ms-3 fs-4">{{$data->peraturan}}</p>
                            <hr>
                            <p for="" class="fw-semibold fs-4">Fasilitas : </p>
                            <p class="card-text ms-3 fs-4">{{$data->fasilitas_umum}}</p>
                            <hr>
                            <p for="" class="fw-semibold fs-4">Fasilitas Kamar : </p>
                            <p class="card-text ms-3 fs-4">{{$data->fasilitas_kamar}}</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h4 class="fs-2">{{$data->nama_kos}}</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-primary">@currency($data->harga) / bulan</h4>
                    @if ($data->tipe_kamar == 1)
                                <button href="#" class="btn btn-sm ms-1 btn-primary"> Kost : Putra</button>
                            @elseif ($data->tipe_kamar  == 2)
                                <button href="#" class="btn btn-sm ms-1 btn-primary"> Kost : Putri</button>
                            @elseif ($data->tipe_kamar  == 3)
                                <button href="#" class="btn btn-sm ms-1 btn-primary"> Kost : Campur</button>
                            @endif
                </div>
                <div class="card-footer">
                    @if (Auth::check())
                        <a href="{{route('app.ajukansewa', $data->id)}}" class="btn btn-outline-primary">Ajukan Sewa</a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-primary me-1 mb-1"> Ajukan Sewa</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection