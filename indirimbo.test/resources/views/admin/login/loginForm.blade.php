@extends('layouts.master')
@section('contents')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

            {{Form::open(array('action' => 'Login','class'=>'well'))}}
            <h2>Login</h2>
            <hr class="colorgraph">
            @include('layouts.partials.errors')

            <div class="form-group">
                {{Form::label('email','Username or Email')}}
                {{ Form::text('username',null,array('class'=>'form-control','placeholder'=>'Enter email')) }}
            </div>
                <div class="form-group">
                    {!! Form::label('password','Password <a href="/sessions/forgot_password">(forgot password)</a>'))!!}
                    {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password']) }}

                </div>
                <button type="submit" class="btn btn-sm btn-default">Sign in</button>

        {{Form::close()}}

    </div>
</div>

@stop