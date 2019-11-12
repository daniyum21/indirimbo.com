@extends('layouts.universal.main')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="form-horizontal" action="" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="modal-body">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">

                    <p>If you are an account holder, you will be sent an email with instructions to reset your password.</p>
                    <div class="panel-body">
                        <fieldset>
                            <div class="field-group @if($errors->has('Email')) has-error @endif">
                                <input class="form-control input-lg" placeholder="E-mail Address" name="Email" type="email">
                                @if($errors->has('Email'))
                                    <p class="help-block">{{ $errors->first('Email') }}</p>
                                @endif
                            </div>
                            <br>
                            <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit" style="width:220px;">

                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </form>
    @stop