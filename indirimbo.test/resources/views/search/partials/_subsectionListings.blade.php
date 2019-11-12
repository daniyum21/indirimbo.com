@if($subsections)
<h3>Amashakiro yihuse</h3>
    <div class="row" style="padding-bottom:1em">
        @foreach($subsections as $subsection)
            <article class="col-md-3">
                <a href="/{{str_replace(' ','-',$subsection)}}" class="list-group-item">{{$subsection}} <span class="badge alert-info">{{app\BookSubSection::subSectionSongsCount($subsection)}}</span> </a>

            </article>
        @endforeach
    </div>
@endif
