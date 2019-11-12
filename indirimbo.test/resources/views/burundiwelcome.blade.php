
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

            <div style="margin-top:40px;width:250px; height:auto">
                <b><i>Nimushimire Uhoraho yukw’ari mwiza,Kukw’imbabazi ziwe zamah’ibihe vyose.Abacunguwe n’Uhoraho bavuge bartyo,
                        Abo yacunguye, akabakura mu kubokokw’umwansi.  Zaburi 107:1,2</i></b>
            </div>
            <div style="margin-top:40px;width:250px; height:auto">
                <b><i>Dushime Nyen'umugisha,Tumushime mw’isi twese,Namwe mw ijurumushimeDat' Umwana Mpwemu Yera</i></b>
            </div>
            <div>

                <h1>Abreviations:</h1>
                <p>G.B. -Golden Bells (C.S.S.M3-7Wigmore St., London, W.I.)</p>
                <p>T.H. –Tabernacle Hymns No. (Tabernacle Publishing Co.,Corner Lakes St. & Waller Ave., Chicago, III.)</p>
                <p>M.S. –Manuscript. (This includes all tunes which do not occur in the above two books. The music may be found in sankey’s
                Songs and Solos, Worship in Song,
                    Christian Service Songs, Alexander’s Hymns No. 3 and other well-known books)</p>
            </div>
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
