
@extends('layouts.master')
@section('title')

{{-- Content --}}


@section('content')
<div class="hero-unit">
    <h1>Marketing stuff!</h1>
 
    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
 
    <a href="#" class="btn btn-large btn-success">Get Started</a>
 </div>
<div class="page-header">
    <h2>Login into your account</h2>
</div>

{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

    <!-- Name -->
    <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
        {{ Form::label('username', 'Username', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('username', Input::old('username')) }}
            {{ $errors->first('username') }}
        </div>
    </div>

    <!-- Email -->
    <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
        {{ Form::label('email', 'E-Mail', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('email', Input::old('email')) }}
            {{ $errors->first('email') }}
        </div>
    </div>

    <!-- Password -->
    <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
        {{ Form::label('password', 'Password', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
    </div>

    <!-- Login button -->
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('Login', array('class' => 'btn')) }}
        </div>
    </div>
<a class="btn btn-primary btn-large">
    Learn more
</a>
{{ Form::close() }}
@stop
