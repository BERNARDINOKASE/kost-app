@extends('pemilik.layout.master')


@section('title', 'Kos Saya')
@section('headertitle', 'Kos Saya')

@section('content')
    <section class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body px-4">
                    <div class="d-flex align-items-center">
                        {{-- <h4>belum ada kos?</h4> --}}
                        <div class="name d-grid gap-2 col-12">
                            {{-- <h5 class="font-bold">Kelola kos anda</h5> --}}
                            <a href="{{route('pemilik.create')}}" class="text-muted mb-0 btn btn-outline btn-xl text-start fs-5"><i class="fa-solid fa-circle-plus m-3"></i>Tambah kos</a>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($data as $item)
                <div class="card">
                    <div class="card-content">
                        @if ($item->foto_bgnan_tampak_depan != null)
                            <img class="card-img-top img-fluid" src="{{asset('storage/galeri_kos/'. $item->foto_bgnan_tampak_depan)}}" style="height: 20rem" />
                        @else
                        <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" id="file-2" />
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nama_kos}}</h4>
                            <p class="card-text">
                                {{$item->deskripsi}}
                            </p>
                            <p class="card-text">
                                Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.
                            </p>
                            <a href="{{route('pemilik.edit', $item->id)}}" class="btn btn-primary block">Edit data kos saya</a>
                            {{-- <button class="btn btn-primary block">Update now</button> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

