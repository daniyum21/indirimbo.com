<br><br>
<div style="width:100%">
<form action="/search" id="search_box" method="post" style="margin: 0 auto">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="wrapper">
        <input type="text" id="search" name="search" placeholder="Shaka Indirimbo cg umubare wayo" style="width:100%" value="@if(isset($searchText)) {{$searchText}}@endif" />
        <button type="submit" class="search_btn"><img src="/img/search_icon.png" title="Search" /></button>
    </div>
</form>
    </div>
<br><br>
