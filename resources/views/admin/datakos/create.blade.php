@extends('admin.layout.master')

@section('title','Tambah Data Kos')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-sunday-list" data-bs-toggle="list" href="#list-sunday" role="tab">Data Kos</a>
                <a class="list-group-item list-group-item-action" id="list-monday-list" data-bs-toggle="list" href="#list-monday" role="tab">Foto</a>
                <a class="list-group-item list-group-item-action" id="list-monday-list" data-bs-toggle="list" href="#list-monday" role="tab">Fasilitas</a>
                <a class="list-group-item list-group-item-action" id="list-tuesday-list" data-bs-toggle="list" href="#list-tuesday" role="tab">Harga</a>
            </div>
        </div>
    </div>
</section>
@endsection