@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                    <input id="user_phone" type="number" class="form-control" name="user_phone" value="{{ old('number-phone') }}" required/>

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
                                    <input id="user_city" type="text" class="form-control" name="user_city" value="{{ old('user_city') }}" required />

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
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    <!--start Image  -->
                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="image" name="image" require>
                                    </span>
                                </span>
                            </div>
                        </div>

                         <!--start Image  -->
    
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
