@extends('Account.dashboards.Admin.layout.dashboard')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <fieldset>
                    <div id="legend">
                        <legend class="">Change Password</legend>
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="control-group @if($errors->has('OldPassword')) has-error @endif">
                        <label class="control-label" for="OldPassword">Old Password</label>
                        <div class="controls ">
                            <input id="OldPassword" name="OldPassword" placeholder="" class="form-control input-lg  " type="password" >
                        </div>
                        @if($errors->has('OldPassword'))
                            <p class="help-block">{{ $errors->first('OldPassword') }}</p>
                        @endif
                    </div>
                    <div class="control-group @if($errors->has('NewPassword')) has-error @endif">
                        <label class="control-label" for="NewPassword">New Password</label>
                        <div class="controls ">
                            <input id="NewPassword" name="NewPassword" placeholder="" class="form-control input-lg  " type="password" >
                        </div>
                        @if($errors->has('NewPassword'))
                            <p class="help-block">{{ $errors->first('NewPassword') }}</p>
                        @endif
                    </div>
                    <div class="control-group @if($errors->has('NewPasswordConfirm')) has-error @endif">
                        <label class="control-label" for="NewPasswordConfirm">New Password (Confirm)</label>
                        <div class="controls">
                            <input id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="" class="form-control input-lg  " type="password">
                        </div>
                        @if($errors->has('NewPasswordConfirm'))
                            <p class="help-block">{{ $errors->first('NewPasswordConfirm') }}</p>
                        @endif
                    </div>



                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls" style="margin-top:20px;">
                            <input type="submit" class="btn btn-success" value="Change Password"/>
                            <input type="button" class="btn btn-success"  style="margin-left:20px;" value="Cancel" onclick="history.back();"/>

                        </div>

                    </div>
                </fieldset>
            </form>
        </div><!--/col-sm-6-->
    </div><!--/row-->
</div>
@stop;