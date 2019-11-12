@extends('layouts.master')
@section('contents')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            {{Form::open(array('action' => 'Login','method'=>'post','class'=>'well','route'=>'Registration'))}}
                <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
            @include('layouts.partials.errors')
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {{Form::label('FirstName',' ')}}
                            {{ Form::text('FirstName',null,array('class'=>'form-control input-lg','placeholder'=>'First Name')) }}

                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {{Form::label('LastName',' ')}}
                            {{ Form::text('LastName',null,array('class'=>'form-control input-lg','placeholder'=>'Last Name')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('DisplayName',' ')}}
                    {{ Form::text('DisplayName',null,array('class'=>'form-control input-lg','placeholder'=>'Display Name')) }}
                  </div>
                <div class="form-group">
                    {{Form::label('email',' ')}}
                    {{ Form::text('email',null,array('class'=>'form-control input-lg','placeholder'=>'Email Address')) }}
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {{Form::label('password',' ')}}
                            {{ Form::password('password',array('class'=>'form-control input-lg','placeholder'=>'Password')) }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {{Form::label('password_confirmation',' ')}}
                            {{ Form::password('password_confirmation',array('class'=>'form-control input-lg','placeholder'=>'Password Confirmation')) }}
          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">

                    <div class="col-xs-12 col-md-6">{{Form::submit('Register',array('class'=>'btn btn-primary btn-block btn-lg'))}}</div>
                    <div class="col-xs-12 col-md-6"><a href="/login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            {{Form::close()}}

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<script type="text/javascript" src="{{ asset('js/SignUp.js')}}"></script>


@stop