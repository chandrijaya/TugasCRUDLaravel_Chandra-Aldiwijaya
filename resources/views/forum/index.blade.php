@extends('template.master')

@section('content')
<h1>Forum Tanya-Jawab</h1>
@foreach($quests as $key => $quest)
    <h2>{{$quest->quest_title}}</h2>
    <p> {{Str::limit(strip_tags($quest->quest_content),150, '......')}}</p>
    <a href="../jawaban/{{$quest->id}}#jawaban" class="btn btn-primary bg-success">Jawaban</a>
    <p><br></p>

@endforeach

@endsection
<?php?>
