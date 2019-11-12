@extends('layouts.dashboard')
@section('contents')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>

<h2 class="sub-header">Choirs</h2>
<div class="table-responsive">
@if(count($choirs)>0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Choir Name</th>
                <th>Urusengero</th>
                <th>Akarere</th>
                <th>Intara</th>
                <th>#</th>
                <th>#</th>


            </tr>
            </thead>
            <tbody>
            @foreach ($choirs as $key=>$choir)
                <tr>
                    <td>{!! $key+1 !!}</td>
                    <td>{!! $choir->ChoirName !!}</td>
                    <td>{!! $choir->ChurchName !!}</td>
                    <td>{!! $choir->Akarere !!}</td>
                    <td>{!! $choir->Intara !!}</td>
                    {{--<td>{!!  link_to_route('choirs.edit', 'Edit', array('ChoirID' => $choir->UUID)) !!}</td>--}}
                    <td><a href="/admin/choirs/{{$choir->UUID}}/edit">Edit Choir</a></td>
                    <td>
                        {!! Form::open([
                     'method' => 'DELETE',
                      'route' => ['choirs.destroy', $choir->UUID]
        ]) !!}
                        {!! Form::submit('Delete?', ['class' => 'btn btn-warning']) !!}
                        {!! Form::close() !!}

                    </td>


                </tr>
            @endforeach

        </table>

    @endif


</div>
    {{--{!!  link_to_route('choirs.create', 'Add Choir',null,['class'=>'btn-lg']) !!}--}}
    <a class="btn-lg" href="{!! route('choirs.create') !!}">Add Choir</a>
</div>
</div>
</div>
@stop
