@extends('layouts.master')
@section('contents')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="jumbotron">
        <h3>Login to your account</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form class="form-horizontal" action="" method="POST">
{{ csrf_field() }}


                        <fieldset>
                            <div id="legend">
                                <legend class="">Login</legend>
                            </div>

                            <div class="control-group @if($errors->has('Email')) has-error @endif">
                                <label class="control-label" for="Email">E-mail</label>
                                <div class="controls">
                                    <input id="Email" name="Email" placeholder="" class="form-control input-lg  " type="email" value="{{ old('Email') }}">
                                    @if($errors->has('Email'))
                                        <p class="help-block">{{ $errors->first('Email') }}</p>
                                    @endif
                                </div>
                            </div>



                            <div class="control-group @if($errors->has('Password')) has-error @endif">
                                <label class="control-label" for="Password">Password</label>
                                <div class="controls ">
                                    <input id="Password" name="Password" placeholder="" class="form-control input-lg  " type="password" >
                                </div>
                                @if($errors->has('Password'))
                                    <p class="help-block">{{ $errors->first('Password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <a href="{{url('/forgotpassword')}}">Forgot Password</a>
                                </div>
                            </div>


                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls" style="margin-top:20px;">
                                    <input type="submit" class="btn btn-success" value="Login"/>
                                    <input type="button" class="btn btn-success"  style="margin-left:20px;" value="Cancel" onclick="history.back();"/>

                                </div>

                            </div>
                            <div id="legend2">
                                <br>
                                <a href="register"> Create A Free Account</a>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
