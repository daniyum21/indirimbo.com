@extends('layouts.dashboard')
@section('contents')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>

<h2 class="sub-header">Users</h2>
<div class="table-responsive">
@if(count($users)>0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $key=>$user)
                <tr>
                    <td>{!! $key+1 !!}</td>
                    <td>{!! $user->FirstName !!}</td>
                    <td>{!! $user->LastName !!}</td>
                    <td>{!! $user->Email !!}</td>
                    <td>{!! $user->Role->RoleName !!}</td>
                    <td>Active</td>
                </tr>
            @endforeach

        </table>

    @endif


</div>
</div>
</div>
</div>
@stop