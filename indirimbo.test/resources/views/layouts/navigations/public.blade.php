<?php
/**
 * Created by PhpStorm.
 * User: daniyum21
 * Date: 9/4/14
 * Time: 9:16 PM
 */
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--a class="navbar-brand" href="#">Indirimbo</a-->
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Route::currentRouteName() == 'Home' ? 'active' : '' }}"><a href="/">Home</a></li>

                {{--<!--<li class="active">{!! link_to_route('home',['Home']) !!}<!--a href="/">Home</a--></li>-->--}}
@if(getCountryID()==1)
                <li class="dropdown {{ Route::currentRouteName() == 'gushimisha' || Route::currentRouteName() == 'agakiza' ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INDIRIMBO ZO MUGITABO <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/gushimisha">INDIRIMBO ZO GUSHIMISHA</a></li>
                        <li><a href="/agakiza">INDIRIMBO Z'AGAKIZA</a></li>

                    </ul>
                </li>
@endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABAHANZI <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($NavigationAbahanzi as $umuhanzi)
                        <li><a href="/umuhanzi/{!! str_slug($umuhanzi->StageName) !!}/{!! $umuhanzi->UUID !!}/">{!! strtoupper($umuhanzi->StageName) !!}</a></li>
                        @endforeach
                        <li><a href="/abahanzi">More>></a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHORALI <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($navigationChoirs as $choir)
                            <li><a href="/korali/{!! str_slug($choir->ChoirName) !!}/{!! $choir->UUID !!}">{!! strtoupper($choir->ChoirName) !!}</a></li>
                        @endforeach
                        <li><a href="/korali">More>></a></li>

                    </ul>
                </li>
                <li class="{{ Route::currentRouteName() == 'turibande' ? 'active' : '' }}"><a href="/turibande">Turi Bande</a></li>
                <li class="{{ Route::currentRouteName() == 'twandikire' ? 'active' : '' }}"><a href="/twandikire">Twandikire</a></li>


            </ul>


            <!--
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li> |
                <li><a href="/register">Register</a></li>
            </ul>
            -->
            <form class="navbar-form navbar-right" action="/search" method="post">
            {!! csrf_field() !!}

                <input type="text" class="form-control" name="search" placeholder="shakisha...">
            </form>

            <form class="navbar-form navbar-right" action="/login" method="get">

                @if(Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
                        <li><a href="/logout">Logout</a></li>
                        @if(Auth::user()->RoleID==1)
                        <li><a href="/admin/">Administration</a></li>
                            @else
                            <li><a href="/Dashboard/">Dashboard</a></li>

                        @endif
                        </ul>

                    </ul>
                    @else
                    {{--<input class="btn btn-info" type="submit" value="Account">--}}
                @endif
            </form>

        </div><!--/.nav-collapse -->

    </div>
</div>
