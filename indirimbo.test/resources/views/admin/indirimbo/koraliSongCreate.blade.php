@extends('layouts.dashboard')
@section('contents')
    <div class="bs-example" style="margin: 20px;">

        {{--{{ Form::open(array('url' => '/admin/indirimbo/korali/create','class'=>'well')) }}--}}
        {!! Form::open(
    array(
        'route' => 'CreateKoraliSong',
        'class' => 'form-horizontal',
        'name'=>'ChoirsForm',
        'method'=>'post',
        'novalidate' => 'novalidate',
        'files' => true)) !!}

        @include('layouts.partials.errors')
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <div class="form-group  container">
            {{ Form::label('SongName', "Izina Ry'indirimbo",array('class'=>'col-xs-2 control-label')) }}
            <div class="col-xs-6">
                {{ Form::text('SongName',null,array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group container ">
            {{ Form::label('korali', "korali",array('class'=>'col-xs-2 control-label')) }}
            <div class="col-xs-6">
                @if(count($korali)>0)
                    {{--{{ Form::select('bookSection',[null=>'Please Select']+$bookSections , Input::old('bookSection')) }}--}}
                    {{ Form::select('korali', $korali , old('korali'),array('placeholder' => 'Please select ')) }}

                @endif
            </div>
        </div>
        <div class="form-group  container">
            {{ Form::label('YoutubeLink', "Youtube Link",array('class'=>'col-xs-2 control-label')) }}
            <div class="col-xs-6">
                {{ Form::text('YoutubeLink',null,array('class'=>'form-control')) }}
            </div>
        </div>
        <div class="form-group{{ $errors->first('Audio', ' has-error') }}">
            <label for="audio" class="col-sm-2 control-label">Audio</label>

            <div class="col-sm-10">
                {!! Form::file('Audio') !!}
                {!! $errors->first('Audio', '<p class="text-danger">:message</p>') !!}
            </div>
        </div>


        <div class="form-group container " id="Chapter1">
            {{ Form::label('SongChapter1', "Igice cy'indirimbo",array('class'=>'col-xs-2 control-label')) }}
            <br>
            REFRAIN? <input type="checkbox" name="refrain1"/>
            <div class="col-xs-6">
                {{ Form::textarea('SongChapter[]',null,array('class'=>'form-control','id'=>'someText1')) }}
                <script type="text/javascript">
                    $('#someText1').wysihtml5();
                </script>
            </div>

        </div>
        <div style="clear: both;" class="col-xs-8 ">
            <button type="button" class="btn btn-default btn-lg" style="clear: both; float:right" id="AddNew">
                <span class="glyphicon glyphicon-plus"></span> Ikindi Gice
            </button>
        </div>

        <div style="clear: both">&nbsp;</div>
        <button type="submit" class="btn btn-large btn-primary">
            <i class="icon-user icon-white"></i> Submit Song
        </button>{{ Form::close() }}


        <script type="text/javascript">
            var counter = 1;
            $("#AddNew").click(function()
            {
                counter=counter+1;



                var contentGenerator = '<br><br><div id="Chapter1" class="form-group container ">'+
                        '<label class="col-xs-2 control-label" for="SongChapter1">Igice cya 1 cy\'indirimbo<br><br>REFRAIN? <input type="checkbox" name="refrain1"/></label>'+
                        ' <div class="col-xs-6">'+
                        '<textarea rows="10" cols="50" name="SongChapter[]" id="someText1" class="form-control"></textarea></div></div> '+
                        '<script type="text/javascript">$("#someText1").wysihtml5();<'+'/'+'script>';

//            alert(contentGenerator);
                var content = contentGenerator.replace(/SongChapter1/g,"SongChapter"+counter);
                content=content.replace(/Chapter1/g,"Chapter"+counter);
                //alert(content);
                //content=content.replace(SongChapter1","SongChapter"+counter);
                content=content.replace(/#someText1/g,"#someText"+counter);
                content=content.replace(/someText1/g,"someText"+counter);
                content=content.replace(/Igice cya 1/g,"Igice cya "+counter);
                content=content.replace(/refrain1/g,"refrain"+counter);

                var temp = "#Chapter"+(counter-1);
                //          alert("This is temp: "+temp);
                $(content).insertAfter(temp);


                //$("#Chapter1").append(content);
                //console.log(content);
                //alert(content);
            });


        </script>
    </div>

@stop