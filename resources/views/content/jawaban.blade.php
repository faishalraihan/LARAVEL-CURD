@extends('adminlte.master')

@section('content')
        <form action="{{ url('/jawaban/'.$items->id) }}" method="POST">
                @csrf
                <div class="form-group">
                <label for="judul">Jawaban</label>
                <input name="isi" type="text" class="form-control" id="judul" value="">
                <input type="hidden" name="tanggal_dibuat" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="vote" value="1">
                <input type="hidden" name="like" value="2">
                <input type="hidden" name="dislike" value="3">
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
@endsection