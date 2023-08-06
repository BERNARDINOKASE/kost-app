@extends('pencarikos.auth.layout.master')

@section('content')
<section class="row d-flex justify-content-center vh-100 align-items-center">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header text-center fs-2 fw-bold">
                From Registrasi Pencari Kos
            </div>
            
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{route('pemilik.store')}}" method="POST">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="basicSelect">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <label>No WhatsApp</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="contact-info" class="form-control" name="contact"
                                        placeholder="No WhatsApp">
                                </div>
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection