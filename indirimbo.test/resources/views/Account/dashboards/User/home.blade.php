@extends('layouts.master')
@section('contents')
   <div> Welcome back <b>{{ Auth::user()->FirstName}}  {{Auth::user()->LastName  }}</b></div>
   @if (session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
   @endif

    @stop;