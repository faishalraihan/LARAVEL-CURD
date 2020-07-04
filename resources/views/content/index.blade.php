@extends('adminlte.master')

@section('content')
<a class="btn btn-primary" href="{{ url('pertanyaan/create') }}">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Isi</th>
            <th scope="col">Aksi</th>
            <th scope="col">Jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->isi }}</td>
            <td>
                <div>
                    <a href="{{url('/pertanyaan/'.$item->id.'/edit')}}"><i class="btn btn-warning fas fa-edit mx-auto"></i></a>
                    <a href="{{url('/pertanyaan/'.$item->id)}}"><i class="btn btn-success far fa-eye mx-auto"></i></a>
                    <form action="{{url('/pertanyaan/'.$item->id)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="far fa-trash-alt mx-auto"></i></i></a>
                    </form>
                </div>
            </td>
            <td > <div class="">
                <a href="{{url('/jawaban/'.$item->id.'/create')}}"><i class="btn btn-primary far fa-plus-square mx-auto"></i></i></a>
                <a href="{{url('/jawaban/'.$item->id)}}"><i class="btn btn-success far fa-eye mx-auto"></i></a>
                </div>
            <td >
        </tr>
        @endforeach
        
    </tbody>
</table>


@endsection
