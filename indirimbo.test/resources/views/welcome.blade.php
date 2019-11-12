
@extends('layouts.master')
@section('contents')

<div class="container theme-showcase" role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style="margin-right:2em">
    {{--<h1>IGITABO CY'INDIRIMBO </h1>--}}
    <h2>Indirimbo Zo Gushimisha Imana, indirimbo z'Agakiza, indirimbo z'abahanzi ba gospel, n'indirimbo z'amakorali</h2>
    <p>Uru ni urubuga rw'indirimbo zihimbaza Imana. Hari izo mugitabo, iz'abahanzi n'iz'amakorali zihimbaza Imana.</p>
@include('search.partials._search')
    @include('search.partials._subsectionListings')
	<div style="float:left; width:60%">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- indirimbo.com homepage -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5711086966004779"
     data-ad-slot="9174737661"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
    @include('layouts.partials.facebookLike')

</div>

</div> <!-- /container -->
@stop