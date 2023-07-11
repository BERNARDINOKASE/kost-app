@extends('admin.layout.master')

@section('title','Data Kos')
    
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <button  href="#" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formdatakos"><i data-feather="edit"></i>   Tambah Data</button>
            
            {{-- <a  href="{{route('data-kos.create')}}" class="btn icon icon-left btn-primary mb-3" ><i data-feather="edit"></i>   Tambah Data</a> --}}
    
            <div class="modal fade text-left" id="formdatakos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Data Kos Form </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        
                        <form action="{{route('data-kos.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row match-height">
                                <div class="col-12">
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
                                                                <label for="nama_kos">Foto bangunan tampak depan</label>
                                                                <input type="file" id="foto_bgnan_tampak_depan" name="foto_bgnan_tampak_depan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Foto tampilan dalam bangunan</label>
                                                                <input type="file" id="foto_bgnan_dalam" name="foto_bgnan_dalam" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Foto tampak dari jalan</label>
                                                                <input type="file" id="foto_bgnan_dari_jalan" name="foto_bgnan_dari_jalan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Foto depan kamar</label>
                                                                <input type="file" id="foto_km_depan" name="foto_km_depan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Foto dalam kamar</label>
                                                                <input type="file" id="foto_km_dalam" name="foto_km_dalam" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Foto kamar mandi</label>
                                                                <input type="file" id="foto_km_mandi" name="foto_km_mandi" class="form-control">
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
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade text-left" id="formfoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Data Kos Form </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        
                        <form action="" method="POST">
                            @csrf
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="row">
                                                        
                                                        
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
        
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead >
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Tipe Kamar</th>
                        <th>Deskripsi</th>
                        <th>Nama Pengelola</th>
                        <th>No Hp Pengelola</th>
                        <th>Peraturan</th>    
                        <th>Fasilitas Kamar</th>
                        <th>Fasilitas Kamar Mandi</th>
                        <th>Fasilitas Umum</th>
                        <th>Alamat</th>
                        <th>Ukuran Kamar ------ panjang</th>
                        <th>Ukuran Kamar ------ lebar</th>
                        <th>Jumlah Kamar</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_kos}}</td>
                            @if ($item->tipe_kamar == 1)
                                <td><a href="#" class="btn btn-warning"><i class="bi bi-gender-male"></i></a></td>
                            @elseif ($item->tipe_kamar == 2)
                                <td><a href="#" class="btn btn-warning"><i class="bi bi-gender-female"></i></a></td>
                            @elseif ($item->tipe_kamar == 3)
                                <td><a href="#" class="btn btn-warning"><i class="bi bi-gender-ambiguous"></i></a></td>
                            @endif
                            <td>{{$item->deskripsi}}</td>
                            @if ($item->nama_pengelola == null)
                                <td>-</td>
                            @else
                                <td>{{$item->nama_pengelola}}</td>
                            @endif
                            @if ($item->no_hp_pengelola == null)
                                <td>-</td>
                            @else
                                <td>{{$item->no_hp_pengelola}}</td>
                            @endif
                            <td>{{$item->peraturan}}</td>
                            <td>{{$item->fasilitas_kamar}}</td>
                            <td>{{$item->fasilitas_kamar_mandi}}</td>
                            <td>{{$item->fasilitas_umum}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->p_kamar}}</td>
                            <td>{{$item->l_kamar}}</td>
                            <td>{{$item->jlh_kamar}}</td>
                            <td>{{$item->harga}}</td>
                            <td class="d-lg-inline-flex">
                                <a href="{{route('data-kos.edit', $item->id)}}" class="btn btn-outline-warning btn-sm m-1 "><i class="bi bi-pencil"></i></a>
                                <form action="{{route('data-kos.destroy', $item->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm m-1"><i class="bi bi-trash"></i></button>
                                </form>
                                <a href="{{route('data-kos.show', $item->id)}}" class="btn btn-outline-primary btn-sm m-1"><i class="bi bi-search"></i></a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('assets/')}}/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/pages/simple-datatables.css">
@endsection

@section('scripts')
    <script src="{{asset('assets/')}}/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{asset('assets/')}}/js/pages/simple-datatables.js"></script>
@endsection