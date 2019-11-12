<div class="hero-unit jumbotron" style="margin-right:2em">
    <a href="{!! preg_replace('/\W\w+\s*(\W*)$/', '$1', url()->full()) !!} text-decoration: none">Indirimbo.com</a>


    @if($indirimbo->SectionID)
        {!!$indirimbo->section->SectionName!!} -
    @endif

    @if($subSectionName)
        <span>
{!!$subSectionName!!}
            </span>
    @endif


    <div   style="text-align: center"><h1><b class="song-title">{!!$indirimbo->SongNumber!!}: {!!$indirimbo->Title!!}</b></h1>

    </div>
    <hr>
<?php $counter = 1; ?>

<div class="song-lyrics">

    @foreach ($indirimbo->ibice as $igice)
    <div style="margin-bottom: 30px">
        @if($igice->Chorus == 'Yes')
        <div style="float: left"> Ref: &nbsp; </div><div class="col-xs-8 refrain"><i>{!!$igice->ChapterText!!} </i></div><br style="clear:both"/>
        @else
    <div  style="float: left;"> {!!$counter!!} &nbsp; </div><div class="col-xs-8">{!!$igice->ChapterText!!}</div><br style="clear:both"/>
        <?php  $counter++;?>
        @endif

    </div>

    @endforeach
</div>

</div>



