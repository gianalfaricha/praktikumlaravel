@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

        <div class="row">
        <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
            {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="formcontrol" id="exampleInputEmail1" ariadescribedby="EmailHelp" placeholder="Nama Mahasiswa" value = "{{$mahasiswa->nama}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">NIM</label>
            <input name="nim" type="text" class="formcontrol" id="exampleInputEmail1" ariadescribedby="EmailHelp" placeholder="Nomor Induk Mahasiswa" value = "{{$mahasiswa->nim}}">
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="formcontrol" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Mahasiswa">{{$mahasiswa->alamat}}</textarea>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-warning">Update</button>
        </div>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
@endsection