@extends('system/login_template')

@section('content')

   <div class="login-box">
	   @if (Session::has('login_error'))
		<div class='col-md-12'>	 			  
		<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-ban"></i>
            {{ Session::get('login_error') }}
        </div>
		</div>

	@endif
  <div class="login-logo">
	  
    <b>Admin</b>LTE
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    {!! Form::open(array('action'=>'RegistrationController@authenticate'))!!}
	    {{ csrf_field() }}
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
                        
                        
                        
      <div class="row">
      	<div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div> 
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
        
      </div>
      
    </form>

	
   <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
        <!-- /.social-auth-links -->

  <!-- <a href="#">I forgot my password</a><br> -->
    <a href="{{ url('/register') }}" class="text-center">Register a new membership</a> 

  </div>
  <!-- /.login-box-body -->
</div>

@endsection