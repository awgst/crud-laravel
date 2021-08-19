@extends('layout.base')
@section('title', 'Tambah Data Mahasiswa')
@section('content')
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        <form action="{{ url('student') }}" method="post">
            @csrf
            <input class="form-control my-1" type="text" placeholder="Nama" aria-label="default input example" name="nama">
            <input class="form-control my-1" type="text" placeholder="NIM" aria-label="default input example" name="nim">
            <input class="form-control my-1" type="text" placeholder="Jurusan" aria-label="default input example" name="jurusan">
            <button class="btn btn-primary d-flex mx-auto">Insert</button>
        </form>
    </div>
@endsection