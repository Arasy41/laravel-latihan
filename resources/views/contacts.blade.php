@extends('layouts.main')

@section('container')
<div class="tittle-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" name="Nama" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="Email" class="form-control" id="inputemail" placeholder="Email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" name="Pesan" placeholder="Tinggalkan Pesan disini!" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Pesan</label>
    </div>
    <button type="submit" class="btn btn-dark">Kirim</button>   
</form>

@endsection