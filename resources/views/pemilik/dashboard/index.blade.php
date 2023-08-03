@extends('pemilik.layout.master')

@section('title', 'Dashboard Pemilik')
@section('headertitle', 'Selamat datang di halaman pemilik kos')

@section('content')
    <section class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <a href="{{route('pemilik.akunsaya')}}" class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{asset('assets/')}}/images/faces/1.jpg" alt="Face 1" />
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                            <h6 class="text-muted mb-0">klik disini untuk melihat akun anda</h6>
                            {{-- <button href="" class="btn btn-light-primary m-2">Akun Saya</button> --}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Kelola kos anda</h3>
                </div>
                <div class="card-body px-4">
                    <div class="d-flex align-items-center">
                        {{-- <h4>belum ada kos?</h4> --}}
                        <div class="name d-grid gap-2 col-12">
                            {{-- <h5 class="font-bold">Kelola kos anda</h5> --}}
                            <a href="{{route('pemilik.create')}}" class="text-muted mb-0 btn btn-outline btn-xl text-start fs-5"><i class="fa-solid fa-circle-plus m-3"></i>Tambah kos</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4">
                    <div class="d-flex align-items-center">
                        {{-- <h4>belum ada kos?</h4> --}}
                        <div class="name d-grid gap-2 col-12">
                            {{-- <h5 class="font-bold">Kelola kos anda</h5> --}}
                            <a href="{{route('pemilik.lihatkos')}}" class="text-muted mb-0 btn btn-outline btn-xl text-start fs-5"><i class="fa-solid fa-magnifying-glass m-3"></i>Lihat kos anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection