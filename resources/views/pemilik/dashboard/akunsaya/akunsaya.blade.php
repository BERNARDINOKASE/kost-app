@extends('pemilik.layout.master')

@section('title', 'Akun saya')
{{-- @section('headertitle', 'Akun saya') --}}

@section('content')
<section class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Informasi Pribadi</h3>
            </div>
            <div class="card-body px-4">
                <div class="form-group ms-3 mb-5">
                    <label for="disabledInput" class="fs-4">Nama Lengkap</label>
                    <p class="form-control-static" id="staticInput">{{ Auth::user()->name}}</p>
                </div>
                <div class="form-group ms-3 my-5">
                    <label for="disabledInput" class="fs-4">Email</label>
                    <p class="form-control-static" id="staticInput">{{ Auth::user()->email}}</p>
                </div>
                <div class="form-group ms-3 my-5">
                    <label for="disabledInput" class="fs-4">Password</label>
                    <p class="form-control-static" id="staticInput">xxxxxxxxxxxxxx</p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ubah Password</a>
                    <div class="collapse m-3" id="collapseExample">
                        @if ( session('error'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                {{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @else
                            <div class="alert alert-success alert-dismissible show fade">
                                Anda berhasil mengganti password
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form class="form" action="{{route('pemilik.gantipassword')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="password_lama">Password lama</label>
                                        <input type="text" id="password_lama" name="password_lama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="password_baru">Password baru</label>
                                        <input type="password" id="password_baru" name="password_baru" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="confirm_password_baru">Konfirmasi password baru</label>
                                        <input type="password" id="confirm_password_baru" name="confirm_password_baru" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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