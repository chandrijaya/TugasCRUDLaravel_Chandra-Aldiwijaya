@extends('template.master')
    
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Ini adalah simulasi CRUD edisi I Laravel berbentuk forum tanya jawab. Jangan lupa atur file .env untuk set database.</p>
    <hr class="my-4">
    <p>Untuk mencoba, silahkan klik tombol di bawah ini.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/pertanyaan" role="button">Learn more</a>
    </p>
  </div>
@endsection