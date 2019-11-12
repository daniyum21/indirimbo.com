@extends('layouts.dashboard')
@section('contents')
{{--    @if (count(session('ProfanityErrors')) > 0)--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach (session('ProfanityErrors') as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="jumbotron">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <h3>Edit Choir</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::model($choir, [
                        'method' => 'PATCH',
                        'route' => ['choirs.update', $choir->UUID]
                    ]) !!}

                    <form class="form-horizontal" action="/admin/abahanzi" method="POST" name="AbahanziForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <fieldset>
                            <div id="legend">
                                <legend class="">Artist information</legend>
                            </div>

                            {{--<div class="control-group @if($errors->has('Email')) has-error @endif">--}}
                                {{--<label class="control-label" for="Email">E-mail</label>--}}
                                {{--<div class="controls">--}}
                                    {{--<input id="Email" name="Email" placeholder="" class="form-control input-lg  " type="email" value="{{ old('Email') }}">--}}
                                    {{--@if($errors->has('Email'))--}}
                                        {{--<p class="help-block">{{ $errors->first('Email') }}</p>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group @if($errors->has('ChoirName')) has-error @endif ">

                                {!! Form::label('Izina rya Korali') !!}
                                {!! Form::text('ChoirName', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('ChoirName'))
                                    <p class="help-block">{{ $errors->first('ChoirName') }}</p>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('ChurchName')) has-error @endif ">

                                {!! Form::label('Urusengero') !!}
                                {!! Form::text('ChurchName', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('ChurchName'))
                                    <p class="help-block">{{ $errors->first('ChurchName') }}</p>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('Akarere')) has-error @endif ">

                                {!! Form::label('Akarere') !!}
                                {!! Form::text('Akarere', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('Akarere'))
                                    <p class="help-block">{{ $errors->first('Akarere') }}</p>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('Intara')) has-error @endif ">

                                {!! Form::label('Intara') !!}
                                {!! Form::text('Intara', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('Intara'))
                                    <p class="help-block">{{ $errors->first('Intara') }}</p>
                                @endif
                            </div>


                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls" style="margin-top:20px;">
                                    <input type="submit" class="btn btn-success" value="Save"/>
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
