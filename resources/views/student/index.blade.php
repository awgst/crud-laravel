@extends('layout.base')
@section('title', 'Data Mahasiswa')
@section('content')
    <div class="container-sm">
        <h1>Data Mahasiswa</h1>
        <a href="{{ url('student/create') }}" class="btn btn-primary">Tambah Data</a>
        <ol class="list-group list-group-numbered">
            @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $student->nama }}</div>
                    {{ $student->jurusan }}
                    </div>
                    <div class="d-flex flex-column">
                        <small>{{ $student->nim }}</small>
                        <div class="d-flex">
                            <a href="{{ url('student/'.$student->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                            <form action="{{ url('student/'.$student->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
@endsection