@extends('layouts.main')

@section('container')
    <h1>About Me</h1>
    <h3>{{ $nama; }}</h3>
    <p>{{ $email; }}</p>
    <img src="images/{{ $gambar; }}" alt="{{ $nama; }}" width="25%">
@endsection
