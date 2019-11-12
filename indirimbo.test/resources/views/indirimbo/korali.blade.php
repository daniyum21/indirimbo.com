@extends('layouts.master')
@section('title')
    Indirimbo zo Gushimisha Imana

@stop
@section('contents')
    <div class="hero-unit">
        <h1 class="text-center" style=" text-transform: capitalize;"><b>Korali</b></h1>

    </div>
    <div class="col-span-3 jumbotron" style="margin-right:2em; font-size:20px">

        <div class="list-group">

            @if(count($korali))
                @foreach ($korali as $choir)
                    <a href="/korali/{!!str_slug($choir->ChoirName)!!}/{!! $choir->UUID !!}" class="list-group-item">{!! $choir->ChoirName !!} {!! $choir->ChurchName !!}
                    </a>

                @endforeach
                <div class="centralize">{!! $korali->links()!!}</div>
            @else
                <p>Mutwihanganire, izi ndirimbo ntizarajya kuri website, ziraba zihari vuba.</p>
            @endif

        </div>
    </div>
@stop
