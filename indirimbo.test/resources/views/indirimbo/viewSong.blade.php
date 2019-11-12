@extends('layouts.master')
@section('contents')
<div class="hero-unit jumbotron" style="margin-right:2em">
    <div   style="text-align: center"><h1><b class="song-title">{!!$indirimbo->SongNumber!!}: {!!$indirimbo->Title!!}</b></h1>
    @if($subSectionName)
            <span><a href="/{!!str_replace(' ','-',$subSectionName)!!}"> < {!!$subSectionName!!} > </a></span>
        @endif
        @if($indirimbo->SectionID==1)
            <span><a href="/gushimisha">< {!!$indirimbo->section->SectionName!!} > </a></span>
            @elseif($indirimbo->SectionID==2)
            <span><a href="/agakiza">< {!!$indirimbo->section->SectionName!!} > </a></span>
        @endif
        <br><br>
        @if($indirimbo->FileName)
            <audio controls>
                <source src="/Audios/{!!  $indirimbo->UUID!!}/{!! str_random(32) !!}" preload="auto" type="audio/mpeg"/>
                Your browser does not support the audio tag!
            </audio>

        @endif

        <br>
        @if(Auth::user()&& Auth::user()->isAdmin())

            {{--{!!  link_to_route('indirimbo.edit', 'Edit Song', array('$SongID' => $indirimbo->UUID)) !!}--}}
            <a href="/admin/indirimbo/{!! $indirimbo->UUID !!}/edit">Edit Song</a>

        @endif</div>
    <hr>
<?php $counter = 1; ?>

<div class="song-lyrics">

    @foreach ($indirimbo->ibice as $igice)
    <div style="margin-bottom: 30px">
        @if($igice->Chorus == 'Yes')
        <div style="float: left"> Ref: </div><div class="col-xs-8 refrain">{!!$igice->ChapterText!!}</div><br style="clear:both"/>
        @else
    <div  style="float: left"> {!!$counter!!} </div><div class="col-xs-8">{!!$igice->ChapterText!!}</div><br style="clear:both"/>
        <?php  $counter++;?>
        @endif

    </div>

    @endforeach
</div>
    @if($indirimbo->YoutubeLink !='')
        <iframe width="420" height="315" src="{!!$indirimbo->YoutubeLink!!}" frameborder="0" allowfullscreen ></iframe>
        @endif
              @include('layouts.partials.facebookLike')
</div>
 <div id="commentsSection" style="clear:both;">

        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'indirimbo';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    </div>
@stop


