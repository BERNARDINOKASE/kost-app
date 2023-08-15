{{-- AppController, history transaksi--}}

@extends('app.layout.master')

@section('title','History Transaksi')
@section('headertitle','History Transaksi Anda')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0 table-lg" id="table1">
                    <thead >
                        <tr>
                            <th>Id</th>
                            <th>Nama Kos</th>
                            <th>Nama Penyewa</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>No Hp Penyewa</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Kampus / Instansi</th>
                            <th>Asal Kota</th>
                            <th>Status</th>
                            <th>No Rekening</th>
                            <th>Nama Rekening</th>
                            <th>Jumlah Transfer</th>
                            <th>Status</th>            
                            <th>Aksi</th>            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->kos_data->nama_kos}}</td>
                                <td>{{$item->nama_penyewa}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->pekerjaan}}</td>
                                <td>{{$item->no_hp}}</td>
                                <td>{{$item->tanggal_lahir}}</td>
                                <td>{{$item->nama_kampus}}</td>
                                <td>{{$item->asal_kota}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->no_rek}}</td>
                                <td>{{$item->nama_rek}}</td>
                                <td>{{$item->jumlah_tf}}</td>
                                <td>status</td>
                                <td class="d-lg-inline-flex">
                                    {{-- <a href="" class="btn btn-outline-warning btn-sm m-1 "><i class="bi bi-pencil"></i></a> --}}
                                    <form action="{{route('ajukan-sewa.destroy', $item->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm m-1">BATAL</i></button>
                                    </form>
                                    {{-- <a href="" class="btn btn-outline-primary btn-sm m-1"><i class="bi bi-search"></i></a> --}}
                                    {{-- <a href="{{route('data-kos.edit', $item->id)}}" class="btn btn-outline-warning btn-sm m-1 "><i class="bi bi-pencil"></i></a>
                                    <form action="{{route('data-kos.destroy', $item->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm m-1"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <a href="{{route('data-kos.show', $item->id)}}" class="btn btn-outline-primary btn-sm m-1"><i class="bi bi-search"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
    
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>
@endsection