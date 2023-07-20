@extends('pemilik.layout.master')

@section('title' ,'Tambah Kos')
@section('headertitle' ,'Halaman tambah Kos')

@section('content')
    
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_kos">Nama Kos</label>
                                        <input type="text" id="nama_kos" name="nama_kos" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Tipe Kamar</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe_kamar" value="1" id="tipe_kamar">
                                            <label class="form-check-label" for="putra">
                                                Putra
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe_kamar" value="2" id="tipe_kamar">
                                            <label class="form-check-label" for="putri">
                                                Putri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe_kamar" value="3" id="tipe_kamar">
                                            <label class="form-check-label" for="campur">
                                                Campur
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_pengelola">Nama Pengelola Kos</label>
                                        <input type="text" id="nama_pengelola" class="form-control" name="nama_pengelola">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_hp_pengelola">No Hp Pengelola Kos</label>
                                        <input type="text" id="no_hp_pengelola" class="form-control" name="no_hp_pengelola">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Kos</label>
                                        <textarea type="text" id="deskripsi" class="form-control" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="peraturan">Peraturan</label>
                                        <textarea type="text" id="peraturan" class="form-control" name="peraturan"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-1" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto bangunan tampak depan</h4>
                                                    <input type="file" id="input-1" name="foto_bgnan_tampak_depan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-2" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto tampilan dalam bangunan</h4>
                                                    <input type="file" id="input-2" name="foto_bgnan_dalam" class="form-control">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-3" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto tampak dari jalan</h4>
                                                    <input type="file" id="input-3" name="foto_bgnan_dari_jalan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-4" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto depan kamar</h4>
                                                    <input type="file" id="input-4" name="foto_km_depan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-5" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto dalam kamar</h4>
                                                    <input type="file" id="input-5" name="foto_km_dalam" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="card" style="text-align:center">
                                            <div class="card-content">
                                                <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" style="width: 50%" id="file-6" />
                                                <div class="card-body">
                                                    <h4 class="card-title">Foto kamar mandi</h4>
                                                    <input type="file" id="input-6" name="foto_km_mandi" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_umum">Fasilitas Umum</label>
                                        <textarea type="text" id="fasilitas_umum" class="form-control" name="fasilitas_umum"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_kamar">Fasilitas Kamar</label>
                                        <textarea type="text" id="fasilitas_kamar" class="form-control" name="fasilitas_kamar"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas_kamar_mandi">Fasilitas Kamar Mandi</label>
                                        <textarea type="text" id="fasilitas_kamar_mandi" class="form-control" name="fasilitas_kamar_mandi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea type="text" id="alamat" class="form-control" name="alamat"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="ukuran_kamar">Ukuran Kamar</label>
                                    <div class="form-group d-flex">
                                        <input type="number" id="p_kamar" class="form-control" name="p_kamar" placeholder="Panjang" >
                                        <label for="ukuran_kamar" class="mt-1 mx-3"><i class="bi bi-x"></i></i></label>
                                        <input type="number" id="l_kamar" class="form-control" name="l_kamar" placeholder="Lebar" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="jlh_kamar">Jumlah Kamar</label>
                                        <input type="number" id="jlh_kamar" class="form-control" name="jlh_kamar">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Harga</label>
                                        <input type="number" id="harga" class="form-control" name="harga">
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
</section>
@endsection
@section('scripts')
    <script>

        //file 1
        let file_1 = document.getElementById("file-1");
        let input_1 = document.getElementById("input-1");

        input_1.onchange = function (){
            file_1.src = URL.createObjectURL(input_1.files[0]);
        }

        //file 2
        let file_2 = document.getElementById("file-2");
        let input_2 = document.getElementById("input-2");
    
        input_2.onchange = function (){
            file_2.src = URL.createObjectURL(input_2.files[0]);
        }

        //file 3
        let file_3 = document.getElementById("file-3");
        let input_3 = document.getElementById("input-3");
    
        input_3.onchange = function (){
            file_3.src = URL.createObjectURL(input_3.files[0]);
        }

        //file 4
        let file_4 = document.getElementById("file-4");
        let input_4 = document.getElementById("input-4");
    
        input_4.onchange = function (){
            file_4.src = URL.createObjectURL(input_4.files[0]);
        }

        //file 5
        let file_5 = document.getElementById("file-5");
        let input_5 = document.getElementById("input-5");
    
        input_5.onchange = function (){
            file_5.src = URL.createObjectURL(input_5.files[0]);
        }

        //file 6
        let file_6 = document.getElementById("file-6");
        let input_6 = document.getElementById("input-6");
    
        input_6.onchange = function (){
            file_6.src = URL.createObjectURL(input_6.files[0]);
        }
    </script>      
@endsection