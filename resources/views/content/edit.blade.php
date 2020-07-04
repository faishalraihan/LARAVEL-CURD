@extends('adminlte.master')

@section('content')
        <form action="{{ url('/pertanyaan/'.$item->id.'/update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="judul">Judul</label>
                <input name="nama_judul" type="text" class="form-control" id="judul">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                <input type="hidden" name="tanggal_diperbaharui" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="vote" value="1">
                <input type="hidden" name="like" value="2">
                <input type="hidden" name="dislike" value="3">
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
@endsection