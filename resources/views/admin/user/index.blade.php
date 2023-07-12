@extends('admin.layout.master')

@section('title','Data User')
    
@section('content')
<section class="section">
    <div class="card col-12 col-lg-8">
        <div class="card-header">
            <button  href="#" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formdatakos"><i data-feather="edit"></i>   Tambah Data</button>
            
            {{-- <a  href="{{route('data-kos.create')}}" class="btn icon icon-left btn-primary mb-3" ><i data-feather="edit"></i>   Tambah Data</a> --}}
    
            <div class="modal fade text-left" id="formdatakos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Data User Form </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        
                        <form action="{{route('data-user.store')}}" method="POST" >
                            @csrf
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="row">
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Nama</label>
                                                                <input type="text" id="name" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Email</label>
                                                                <input type="email" id="email" name="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label for="nama_kos">Password</label>
                                                                <input type="password" id="password" name="password" class="form-control">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-8 d-flex justify-content-end">
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
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td class="d-lg-inline-flex">
                                <a href="" class="btn btn-outline-warning btn-sm m-1 "><i class="bi bi-pencil"></i></a>
                                <form action="}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm m-1"><i class="bi bi-trash"></i></button>
                                </form>
                                <a href="" class="btn btn-outline-primary btn-sm m-1"><i class="bi bi-search"></i></a>

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