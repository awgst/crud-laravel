@extends('layout.base')
@section('title', 'Edit Data Mahasiswa')
@section('content')
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        <form action="{{ url('student/'.$student->id) }}" method="post">
            @csrf
            @method('put')
            <input class="form-control my-1" type="text" placeholder="Nama" aria-label="default input example" name="nama" value="{{ $student->nama }}">
            <input class="form-control my-1" type="text" placeholder="NIM" aria-label="default input example" name="nim" value="{{ $student->nim }}">
            <input class="form-control my-1" type="text" placeholder="Jurusan" aria-label="default input example" name="jurusan" value="{{ $student->jurusan }}">
            <button class="btn btn-primary d-flex mx-auto">Edit</button>
        </form>
    </div>
@endsection