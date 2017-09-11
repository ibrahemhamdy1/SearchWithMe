@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Edit  Your  Profile</div>
                					<div class="col-md-12 text-center">
                                        <img  class="img-responsive img-thumbnail  
                                                img-circle text-center" 
                                                src="/{{$user['image']}}" 
                                                alt="" hight="100px" width="100px"
                                        />
                                    </div>    

                <div class="panel-body">
                {!! Form::model($user,array('method'=>'PATCH','action'=>['UserController@update',$user->id],'files'=>true))!!}

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                {!!Form::text('name',null,array('required','class'=>'form-control live','placeholder'=>'Your  name '))!!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                          <!-- here  we start the  phone  user  input-->
                            <div class="form-group">
                                <label for="number" class="col-md-4 control-label">Your  phone</label>

                                <div class="col-md-6">
                                    {!!Form::text('user_phone',null,array('required','class'=>'form-control live','placeholder'=>'Your phone  number'))!!}

                                    @if ($errors->has('user_phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          <!-- here  we end the  phone  user  input  -->

                          <!-- here  we start the  city  user  input-->
                          <div class="form-group">
                                <label for="text" class="col-md-4 control-label">Your  city </label>

                                <div class="col-md-6">
                                    {!!Form::text('user_city',null,array('required','class'=>'form-control live','placeholder'=>'Your user_city'))!!}

                                    @if ($errors->has('user_city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          <!-- here  we end the  city  user  input  -->

                          <!-- here  we start the user address  input-->
                          <div class="form-group">
                                <label for="text" class="col-md-4 control-label">Your  address </label>

                                <div class="col-md-6">
                                    {!!Form::text('address',null,array('required','class'=>'form-control live','placeholder'=>'Your address'))!!}

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          <!-- here  we end the user address   input  -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {!!Form::text('email',null,array('required','class'=>'form-control live','placeholder'=>'Your email'))!!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                {!!Form::password('password',null,array('required','class'=>'form-control live','placeholder'=>'Your password'))!!}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                    <!--start Image  -->
                        

                         <!--start Image  -->
    
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Update',array('class'=>'btn  btn-primary')) !!}
                            {!! Form::close() !!} 

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
