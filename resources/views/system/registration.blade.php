@extends('system/login_template')

@section('content')
   <div class="login-box">
        @if (Session::has('register_success'))
		<div class='col-md-12'>	 			  
		<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-ban"></i>
            {{ Session::get('register_success') }}
        </div>
		</div>
   @endif
  <div class="login-logo">
    <b>Tyrex</b>LTE
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register a new membership</p>

    {!! Form::open(array('action'=>'RegistrationController@store'))!!}
	    {{ csrf_field() }}
	    
	  <div class="form-group  has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                            

                           
                                <input id="email" type="name" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            
                        </div>  
	    
	    
      <div class="form-group  has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            

                           
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            
                        </div>

      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        
        <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                           

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
								<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>                
                        
                        
                        
      <div class="row">
      	<div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div> 
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

	<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>
        <!-- /.social-auth-links -->

    
    <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection