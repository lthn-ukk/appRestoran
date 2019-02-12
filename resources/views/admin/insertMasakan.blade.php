@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Masakan</div>

                <div class="panel-body">
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    <form action="{{ route('masakan.store') }}" class="form-horizontal" method="POST" role="form">
                    {{ csrf_field() }}
                    
                        <div class="form-group{{ $errors->has('nama_masakan') ? ' has-error' : '' }}">
                            <label for="nama_masakan" class="col-md-4 control-label">Nama Masakan</label>
                            
                            @if ($errors->has('nama_masakan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_masakan') }}</strong>
                                    </span>
                            @endif

                            <div class="col-md-6">
                                <input id="nama_masakan" type="text" class="form-control" name="nama_masakan" value="{{ old('nama_masakan') }}" placeholder="Nama Masakan" required autofocus>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga</label>
                            
                            @if ($errors->has('harga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                            @endif

                            <div class="col-md-6">
                                <input id="harga" type="number" min="0" class="form-control" name="harga" value="{{ old('harga') }}" placeholder="Harga" required autofocus>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('status_masakan') ? ' has-error' : '' }}">
                            <label for="status_masakan" class="col-md-4 control-label">Status Masakan</label>
                            
                            @if ($errors->has('status_masakan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status_masakan') }}</strong>
                                    </span>
                            @endif

                            <div class="col-md-6">
                                <input id="status_masakan" type="text" class="form-control" name="status_masakan" value="{{ old('status_masakan') }}" placeholder="Status Masakan" required autofocus>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection