@extends('adminlte.master')

@section('content')
<a class="btn btn-primary" href="{{ url('pertanyaan/create') }}">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">isi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Tanggal Diperbaharui</th>
            <th scope="col">vote</th>
            <th scope="col">Like</th>
            <th scope="col">Dislike</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama_judul }}</td>
            <td>
                {{ $item->isi }}
            </td>
            <td>{{ $item->tanggal_dibuat }}</td>
            <td>{{ $item->tanggal_diperbaharui }}</td>
            <td>{{ $item->vote }}</td>
            <td>{{ $item->like }}</td>
            <td>{{ $item->dislike }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>


@endsection
