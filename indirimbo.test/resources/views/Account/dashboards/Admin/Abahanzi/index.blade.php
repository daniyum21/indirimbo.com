@extends('layouts.dashboard')
@section('contents')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>

<h2 class="sub-header">Abahanzi</h2>
<div class="table-responsive">
@if(count($abahanzi)>0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Stage Name</th>
                <th>Twitter</th>
                <th>...</th>
                <th>...</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($abahanzi as $key=>$umuhanzi)
                <tr>
                    <td>{!! $key+1 !!}</td>
                    <td>{!! $umuhanzi->FirstName !!}</td>
                    <td>{!! $umuhanzi->LastName !!}</td>
                    <td>{!! $umuhanzi->StageName !!}</td>
                    <td><a href="http://www.twitter.com/{!!  $umuhanzi->Twitter!!}" target="_blank">{!!  $umuhanzi->Twitter!!}</a></td>
                    {{--<td>{!!  link_to_route('abahanzi.edit', 'Edit', array('UmuhanziID' => $umuhanzi->UUID)) !!}</td>--}}
                    <td><a href="/admin/abahanzi/{{$umuhanzi->UUID}}/edit">Edit Umuhanzi</a>
                    </td>
                    <td>
                        {!! Form::open([
                     'method' => 'DELETE',
                      'route' => ['abahanzi.destroy', $umuhanzi->UUID]
        ]) !!}
                        {!! Form::submit('Delete?', ['class' => 'btn btn-warning']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach

        </table>

    @endif


</div>
    {{--{!!  link_to_route('abahanzi.create', 'Add Umuhanzi',null,['class'=>'btn-lg']) !!}--}}
    <a class="btn-lg" href="{!! route('abahanzi.create') !!}">Add Umuhanzi</a>
</div>
</div>
</div>
@stop

