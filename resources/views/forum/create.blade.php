@extends('template.master')

@section('content')
<h1>Buat Pertanyaan Baru</h1>
<div class="ml-3 mr-3">
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="quest">Judul Pertanyaan</label>
            <input type="text" class="form-control" name="quest_title" placeholder="Buat judul pertanyaan" id="quest_title">
            <label for="quest">Isi Pertanyaan</label>
            <textarea type="text" class="form-control" name="quest_content" placeholder="Buat isi pertanyaan" id="quest_content"></textarea>
            <p><br></p>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../../pertanyaan" class="btn btn-primary bg-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#quest_content').summernote();
    });
</script>
@endpush