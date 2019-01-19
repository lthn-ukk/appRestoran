@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_user') ? ' has-error' : '' }}">
                            <label for="nama_user" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="nama_user" type="text" class="form-control" name="nama_user" value="{{ old('nama_user') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('nama_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_level" class="col-md-4 control-label">Role User</label>

                            <div class="col-md-6">
                                <select class="form-control" name="id_level" id="id_level">
                                    <option value="">Select Role User</option>
                                    <option value="5">Pelanggan</option>
                                    <option value="1">Waiter</option>
                                    <option value="3">Kasir</option>
                                    <option value="2">Owner</option>
                                    <option value="4">Admin</option>
                                </select>

                                @if ($errors->has('id_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
