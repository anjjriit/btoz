@extends('layouts.base')

@section('content')

            {{ Form::open(['route' => 'site.login']) }}
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <input type="text" name="email" class="form-control input-md" placeholder="Email..." value="{{ Input::old('email') }}">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control input-md" placeholder="Password...">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-md btn-block mb">Login</button>
                    <div class="text-center">
                        <a href="{{ route('site.forgot_password') }}">Forgot Password</a>
                    </div>
                </div>
            </div>
            {{ Form::close() }}

@stop