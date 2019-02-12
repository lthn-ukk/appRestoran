@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Data Masakan</div>

                <div class="panel-body">
                    <a href="{{route('home')}}">Beranda</a>
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arr_masakan as $data_masakan)
                            <tr>
                                <th scope="1">{{ $loop->iteration }}</th>
                                <td>{{ $data_masakan->nama_masakan }}</td>
                                <td>{{ $data_masakan->harga }}</td>
                                <td>{{ $data_masakan->status_masakan }}</td>
                                <td>
                                    <button class="btn btn-danger">Hapus</button>
                                    <a class="btn btn-success" href="{{ route('masakan.edit',$data_masakan->id_masakan) }}">Ubah</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $arr_masakan->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection