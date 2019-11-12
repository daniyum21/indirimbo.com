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
        <h3>Ongeraho Umuhanzi</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::model($umuhanzi, [
                        'method' => 'PATCH',
                        'route' => ['abahanzi.update',$umuhanzi->UUID]
                    ]) !!}
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

                            <div class="form-group @if($errors->has('FirstName')) has-error @endif ">

                                {!! Form::label('First Name') !!}
                                {!! Form::text('FirstName', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('FirstName'))
                                    <p class="help-block">{{ $errors->first('FirstName') }}</p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('LastName')) has-error @endif ">

                                {!! Form::label('Last Name') !!}
                                {!! Form::text('LastName', null,
                                  ['class' => 'form-control input-lg']
                                   ) !!}
                                @if($errors->has('LastName'))
                                    <p class="help-block">{{ $errors->first('LastName') }}</p>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('StageName')) has-error @endif ">

                                {!! Form::label('Stage Name') !!}
                                {!! Form::text('StageName', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('StageName'))
                                    <p class="help-block">{{ $errors->first('StageName') }}</p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('Twitter')) has-error @endif ">

                                {!! Form::label('Twitter Account') !!}
                                {!! Form::text('Twitter', null,
                                  ['class' => 'form-control input-lg'])
                                    !!}
                                @if($errors->has('Twitter'))
                                    <p class="help-block">{{ $errors->first('Twitter') }}</p>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('Biography')) has-error @endif ">
                                {!! Form::label('Biography') !!}
                                {{ Form::textarea('Biography',null,array('class'=>'form-control','id'=>'Biography')) }}
                                <script type="text/javascript">
                                    $('#Biography').wysihtml5();
                                </script>
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
