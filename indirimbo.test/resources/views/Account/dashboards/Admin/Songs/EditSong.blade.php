@extends('layouts.dashboard')
@section('contents')
    <div class="bs-example" style="margin: 20px;">
        {!! Form::model($indirimbo, [
                'method' => 'PATCH',
                'route' => ['indirimbo.update',$indirimbo->UUID],
                'files' => true
            ]) !!}



        @include('layouts.partials.errors')
        <div class="form-group  container">
            {{ Form::label('Title', "Izina Ry'indirimbo",array('class'=>'col-xs-2 control-label')) }}
            <div class="col-xs-6">
                {{ Form::text('Title',null,array('class'=>'form-control')) }}

            </div>
        </div>



        @if($indirimbo->UmuhanziID)

            <div class="form-group container ">
                {{ Form::label('Umuhanzi', "Umuhanzi",array('class'=>'col-xs-2 control-label')) }}
                <div class="col-xs-6">
                    @if(count($abahanzi)>0)
                        {{--{{ Form::select('bookSection',[null=>'Please Select']+$bookSections , Input::old('bookSection')) }}--}}
                        {{ Form::select('UmuhanziID', $abahanzi , null,array('placeholder' => 'Please select ')) }}

                    @endif
                </div>
            </div>

            @elseif($indirimbo->ChoirID)
            <div class="form-group container ">
                {{ Form::label('ChoirID', "Korali",array('class'=>'col-xs-2 control-label')) }}
                <div class="col-xs-6">
                    @if(count($amakorali)>0)
                        {{--{{ Form::select('bookSection',[null=>'Please Select']+$bookSections , Input::old('bookSection')) }}--}}
                        {{ Form::select('ChoirID', $amakorali , null,array('placeholder' => 'Please select ')) }}

                    @endif
                </div>
            </div>

            @else
            <div class="form-group container ">
                {{ Form::label('SongNumber', "Umubare w'indirimbo",array('class'=>'col-xs-2 control-label')) }}
                <div class="col-xs-6">
                    {{ Form::text('SongNumber',null,array('class'=>'form-control')) }}        </div>
            </div>

            <div class="form-group container ">
                {{ Form::label('Igitabo', "Igitabo indirimbo ibarizwamo",array('class'=>'col-xs-2 control-label')) }}
                <div class="col-xs-6">
                    @if($bookSections && count($bookSections)>0)
                        {{--{{ Form::select('bookSection',[null=>'Please Select']+$bookSections , Input::old('bookSection')) }}--}}
                        {{ Form::select('SectionID', $bookSections , old('bookSubSection'),array('placeholder' => 'Please select ')) }}

                    @endif
                </div>
            </div>


            @if(count($bookSubSections)>0 && $indirimbo->SectionID==1)

                <div class="form-group container ">
                    {{ Form::label('SubSection', "Igice indirimbo ibarizwamo",array('class'=>'col-xs-2 control-label')) }}
                    <div class="col-xs-6">
                        {{ Form::select('SubSectionID', $bookSubSections ,old('bookSubSection'),array('placeholder' => 'Please select ')) }}

                    </div>
                </div>
            @endif


        @endif

        <div class="form-group{{ $errors->first('Audio', ' has-error') }}">
            <label for="audio" class="col-sm-2 control-label">Audio</label>

            <div class="col-sm-10">
                {!! Form::file('Audio') !!}
                {!! $errors->first('Audio', '<p class="text-danger">:message</p>') !!}
            </div>
        </div>
<br>





        <div class="form-group  container">
            {{ Form::label('YoutubeLink', "Youtube Link",array('class'=>'col-xs-2 control-label')) }}
            <div class="col-xs-6">
                {{ Form::text('YoutubeLink',null,array('class'=>'form-control')) }}
            </div>
        </div>

        {{--Ibice--}}
        @foreach($indirimbo->ibice as $index=>$igice)
            <div class="form-group container " id="Chapter{!! $index !!}">
                {{ Form::label("SongChapter$index", "Igice cy'indirimbo",array('class'=>'col-xs-2 control-label')) }}
                <br>
                REFRAIN? <input type="checkbox" name="refrain{!! $index !!}" @if($igice->Chorus=='Yes') checked @endif />
                <div class="col-xs-6">
                    {{ Form::textarea('SongChapter[]',$igice->ChapterText,array('class'=>'form-control amatext','id'=>"someText$index")) }}
                    <script type="text/javascript">
                        $('#someText{!! $index !!}').wysihtml5();
                    </script>
                </div>

            </div>
        @endforeach


        <div style="clear: both;" class="col-xs-8 ">
            <button type="button" class="btn btn-default btn-lg" style="clear: both; float:right" id="AddNew">
                <span class="glyphicon glyphicon-plus"></span> Ikindi Gice
            </button>
        </div>

        <div style="clear: both">&nbsp;</div>
        <button type="submit" class="btn btn-large btn-primary">
            <i class="icon-user icon-white"></i> Submit Song
        </button>
        <input type="button" class="btn btn-success"  style="margin-left:20px;" value="Cancel" onclick="history.back();"/>
        {{ Form::close() }}


        <script type="text/javascript">
            var counter = 1;
            $("#AddNew").click(function()
            {

                counter=$('.amatext').length;

                var contentGenerator = '<br><br><div id="Chapter'+counter+'" class="form-group container ">'+
                        '<label class="col-xs-2 control-label" for="SongChapter'+counter+'">Igice cya  cy\'indirimbo<br><br>REFRAIN? <input type="checkbox" name="refrain'+counter+'"/></label>'+
                        ' <div class="col-xs-6">'+
                        '<textarea rows="10" cols="50" name="SongChapter[]" id="someText'+counter+'" class="form-control amatext"></textarea></div></div> '+
                        '<script type="text/javascript">$("#someText'+counter+'").wysihtml5();<'+'/'+'script>';
//
////            alert(contentGenerator);
//                var content = contentGenerator.replace(/SongChapter1/g,"SongChapter"+counter);
//                content=content.replace(/Chapter1/g,"Chapter"+counter);
//                //alert(content);
//                //content=content.replace(SongChapter1","SongChapter"+counter);
//                content=content.replace(/#someText1/g,"#someText"+counter);
//                content=content.replace(/someText1/g,"someText"+counter);
//                content=content.replace(/Igice cya 1/g,"Igice cya "+counter);
//                content=content.replace(/refrain1/g,"refrain"+counter);

                var temp = "#Chapter"+(counter-1);
                //          alert("This is temp: "+temp);
                $(contentGenerator).insertAfter(temp);


                //$("#Chapter1").append(content);
                //console.log(content);
                //alert(content);
            });


        </script>
    </div>

@stop