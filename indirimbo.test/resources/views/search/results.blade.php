@extends('layouts.master')
@section('contents')
    <div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron resultsPage" style="margin-right:2em">
            @include('search.partials._search')
            @if(count($results)>0)
                <div class="list-group">
                    <div class="ResultsTitle"><h3>Results for <i>{{$searchText}}</i> </h3></div>
                @foreach($results as $resultset)
                        @if($resultset->SectionID==1)
                            {{--*/ $bookSection = 'gushimisha' /*--}}
                            <a href="/gushimisha/{!! clean($resultset->realTitle)!!}/{!!$resultset->UUID !!}" class="list-group-item"><i><u>Indirimbo ya {!!   $resultset->SongNumber !!}</u></i></b> : <br>{!!  $resultset->TITLE!!}</a></b>
                            @elseif($resultset->SectionID==2)
                                {{--*/ $bookSection = 'gushimisha' /*--}}
                                <a href="/agakiza/{!! clean($resultset->realTitle)!!}/{!!$resultset->UUID !!}" class="list-group-item"><i><u>Indirimbo ya {!!   $resultset->SongNumber !!}</u></i></b> : <br>{!!  $resultset->TITLE!!}</a></b>

                            @elseif($resultset->UmuhanziID)
                            <a href="/umuhanzi/{!! str_slug($resultset->StageName) !!}/{!! 
str_slug($resultset->realTitle) !!}/{!! $resultset->UUID !!}" class="list-group-item">{!! 
$resultset->realTitle !!}</a>
                        @elseif($resultset->ChoirID)
                            <a href="/korali/{!! str_slug($resultset->ChoirName) !!}/{!! str_slug($resultset->realTitle) !!}/{!! $resultset->UUID !!}" class="list-group-item">{!! $resultset->realTitle !!}</a>

                        @endif

                    @endforeach
                </div>
                @else
                Indirimbo mwifuza ntibashije kuboneka. Mutwihanganire.
                @endif
        </div>

    </div> <!-- /container -->
@stop
