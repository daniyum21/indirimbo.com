@extends('layouts.master')
@section('title')
    Indirimbo zo Gushimisha Imana

@stop
@section('contents')
    <div class="hero-unit">
        <h1 class="text-center" style=" text-transform: capitalize;"><b>Indirimbo za {!! $umuhanzi->StageName !!}</b></h1>

    </div>
    <div class="col-span-3 jumbotron" style="margin-right:2em; font-size:20px">

        <div class="list-group">

            @if(count($indirimbo))
                @foreach ($indirimbo as $Oneindirimbo)
                        <a href="/umuhanzi/{!! str_slug($umuhanzi->StageName) !!}/{!! str_slug($Oneindirimbo->Title) !!}/{!! $Oneindirimbo->UUID !!}" class="list-group-item">{!! $Oneindirimbo->Title !!}

                        </a>

                @endforeach
                <div class="centralize">{!! $indirimbo->links()!!}</div>
            @else
                <p>Mutwihanganire, izi ndirimbo ntizarajya kuri website, ziraba zihari vuba.</p>
            @endif

        </div>
    </div>
@stop
