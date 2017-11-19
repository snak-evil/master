@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-body">
    <article class="container-login center-block">
        <section>
            <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
                <div id="login-access" class="tab-pane fade active in">
                    <h2><i class="glyphicon glyphicon-log-in"></i> Log In</h2>                     
                    <form method="POST" action="{{ route('login') }}" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="login" class="sr-only">Email</label>
                                <input type="text" class="form-control" name="email" id="login_value" 
                                    placeholder="Email" tabindex="1" value="{{ old('email') }}" required autofocus />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" value="" tabindex="2" />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="checkbox">
                                <label class="control-label" for="remember_me">
                                    <input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" {{ old('remember') ? 'checked' : '' }} /> Remember Me
                                </label>
                        </div>
                        <div class="row">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                        <br/>
                        <div class="form-group ">               
                            <button type="submit" id="submit" tabindex="5" class="btn btn-lg btn-primary">Sign In</button>
                        </div>
                    </form>         
                </div>
            </div>
        </section>
    </article>
</div>
</div>
@endsection
