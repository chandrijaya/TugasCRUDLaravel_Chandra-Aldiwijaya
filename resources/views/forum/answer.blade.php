@extends('template.master')

@section('content')
<div style="border-bottom: 3px double rgb(69, 151, 245);">
    <h2>{{$quests->quest_title}}</h2>
    <p style="color:grey; top:0; font-size:12px"> 
        Date created: {{$quests->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Date modified: {{$quests->updated_at}}<br>
    </p>
    <div><?php echo $quests->quest_content; ?></div>
    <p style="font-size:1px"><br></p>   
      
</div>
<div class="ml-3 mr-3" id="jawaban">
@foreach($answers as $key => $answer)
<div style="border-bottom: 1px solid rgb(181, 215, 255);
            margin-top: 50px;
            margin-bottom: 50px">
    <div style="font-size:16px;"><?php echo $answer->answer_content;?></div>
    <p style="color:grey; float:right; font-size:13px;"> 
        Date created: {{$answer->created_at}}
    </p>
</div>
@endforeach
</div>
<p><br></p>

<div class="ml-3 mr-3">
    <form action="/jawaban/{{$quests->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="answer">Tulis Jawaban Anda</label>
            <textarea type="text" class="form-control" name="answer_content" placeholder="Buat jawaban anda" id="answer_content"></textarea>
            <p><br></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#answer_content').summernote();
    });
</script>
@endpush