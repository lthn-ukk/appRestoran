@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged inaaa!
                    <a href="{{ route('masakan.create') }}">Tambah Masakan</a> |
                    <a href="{{ route('masakan.index') }}">Daftar Masakan</a> |
                    <a href="{{ route('order') }}">Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
