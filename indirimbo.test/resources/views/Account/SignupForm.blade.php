@extends('layouts.master')
@section('contents')
    @if (count(session('ProfanityErrors')) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach (session('ProfanityErrors') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="jumbotron">
        <h3>Create a free account</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form class="form-horizontal" action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <fieldset>
                            <div id="legend">
                                <legend class="">Register</legend>
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

                            <div class="control-group @if($errors->has('FirstName')) has-error @endif ">
                                <label class="control-label" for="FirstName">First Name</label>
                                <div class="controls">
                                    <input id="email" name="FirstName" placeholder="" class="form-control input-lg " type="text" value="{{ old('FirstName') }}">
                                </div>
                                @if($errors->has('FirstName'))
                                    <p class="help-block">{{ $errors->first('FirstName') }}</p>
                                @endif
                            </div>

                            <div class="control-group @if($errors->has('LastName')) has-error @endif ">
                                <label class="control-label" for="LastName">Last Name</label>
                                <div class="controls ">
                                    <input id="LastName" name="LastName" placeholder="" class="form-control input-lg" type="text" value="{{ old('LastName') }}">
                                </div>
                                @if($errors->has('LastName'))
                                    <p class="help-block">{{ $errors->first('LastName') }}</p>
                                @endif
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

                            <div class="control-group @if($errors->has('PasswordConfirm')) has-error @endif">
                                <label class="control-label" for="password_confirm">Password (Confirm)</label>
                                <div class="controls">
                                    <input id="PasswordConfirm" name="PasswordConfirm" placeholder="" class="form-control input-lg  " type="password">
                                </div>
                                @if($errors->has('PasswordConfirm'))
                                    <p class="help-block">{{ $errors->first('PasswordConfirm') }}</p>
                                @endif
                            </div>

                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls" style="margin-top:20px;">
                                    <input type="submit" class="btn btn-success" value="Register"/>
                                    <input type="button" class="btn btn-success"  style="margin-left:20px;" value="Cancel" onclick="history.back();"/>

                                </div>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
