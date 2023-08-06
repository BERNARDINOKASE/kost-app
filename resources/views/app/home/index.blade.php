@extends('app.layout.master')

@section('title','Home')
@section('headertitle','Selamat Datang di Beta Kos')

@section('content')
<section class="row">
    <div class="col-md-12 col-sm-12">
        {{-- <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Followers</h6>
                                <h6 class="font-extrabold mb-0">183.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start" >
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Following</h6>
                                <h6 class="font-extrabold mb-0">80.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                <h6 class="font-extrabold mb-0">112</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <a class="card-content"  href="{{route('app.show', $item->id)}}">
                            @if ( $item->foto_bgnan_tampak_depan == null)    
                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" id="file-2" />
                            @else
                                <img class="card-img-top img-fluid" src="{{asset('storage/galeri_kos/'. $item->foto_bgnan_tampak_depan)}}" alt="Card image cap" style="height: 20rem" />
                            @endif
                            <div class="card-body">
                                <h4 class="card-title fs-3">{{$item->nama_kos }}</h4>
                                <p class="card-text fs-4 ms-4">{{$item->alamat}}</p>
                                {{-- <p class="card-text">{{$item->deskripsi}}</p> --}}
                                <p class="card-text">{{$item->fasilitas_umum}}</p>
                                <a class="card-link">@currency($item->harga) / bulan</a>
                            </div>
                        </a>
                    </div>
                </div>
                
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                <svg
                                    class="bi text-primary"
                                    width="32"
                                    height="32"
                                    fill="blue"
                                    style="width: 10px"
                                >
                                    <use
                                    xlink:href="{{asset('assets/')}}/images/bootstrap-icons.svg#circle-fill"
                                    />
                                </svg>
                                <h5 class="mb-0 ms-3">Europe</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">862</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                <svg
                                    class="bi text-success"
                                    width="32"
                                    height="32"
                                    fill="blue"
                                    style="width: 10px"
                                >
                                    <use
                                    xlink:href="{{asset('assets/')}}/images/bootstrap-icons.svg#circle-fill"
                                    />
                                </svg>
                                <h5 class="mb-0 ms-3">America</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">375</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-america"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                <svg
                                    class="bi text-danger"
                                    width="32"
                                    height="32"
                                    fill="blue"
                                    style="width: 10px"
                                >
                                    <use
                                    xlink:href="{{asset('assets/')}}/images/bootstrap-icons.svg#circle-fill"
                                    />
                                </svg>
                                <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                            <img src="{{asset('assets/')}}/images/faces/5.jpg" />
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Cantik</p>
                                        </div>
                                        </td>
                                        <td class="col-auto">
                                        <p class="mb-0">
                                            Congratulations on your graduation!
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('assets/')}}/images/faces/2.jpg" />
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class="mb-0">
                                                Wow amazing design! Can you make another
                                                tutorial for this design?
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection