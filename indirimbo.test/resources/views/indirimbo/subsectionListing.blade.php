@extends('layouts.master')
@section('title')
    Indirimbo zo Gushimisha Imana

@stop
@section('contents')
    <div class="hero-unit">
        <h1 class="text-center" style=" text-transform: capitalize;"><b>{!!$subsectionTitle!!}</b></h1>

    </div>
    <div class="col-span-3 jumbotron" style="margin-right:2em; font-size:20px">

        <div class="list-group">

            @if(count($indirimbo))
                @foreach ($indirimbo as $indirimboEntry)
                    <a href="/{!!$sectionTitle!!}/{!!clean($indirimboEntry->Title)!!}/{!!$indirimboEntry->UUID!!}"
                       class="list-group-item">{!! $indirimboEntry->SongNumber !!} : {!!$indirimboEntry->Title!!} @if($indirimboEntry->SubSectionID)
                          <!--  <span class="subsectionHeader">{!!$indirimboEntry->SubSection->SubSectionName!!}</span> -->
                    </a>
                        @endif

                @endforeach
                <div class="centralize">{!! $indirimbo->links()!!}</div>
            @else
                <p>Mutwihanganire, izi ndirimbo ntizarajya kuri website, ziraba zihari vuba.</p>
            @endif

        </div>
    </div>
@stop
