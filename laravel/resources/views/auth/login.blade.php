@extends('layouts._heads')
@include('layouts._login_navbar')
@section('body')
    <div class="backgr">

        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="{{ url('/login') }}"
                                          style="display: block;">
                                        {{ csrf_field() }}
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" name="email" id="email" tabindex="1"
                                                   class="form-control" placeholder="Username" value="">

                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="password" name="password" id="password" tabindex="2"
                                                   class="form-control" placeholder="Password">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                            @endif
                                        </div>

                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <button type="submit" class="form-control btn btn-login">
                                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                                    </button>


                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="{{ url('/register') }}" class="forgot-password">don't
                                                            have account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <button type="button" class="forgot-password"
                                                            data-toggle="modal" data-target=".bs-example-modal-sm">
                                                        Forgot password
                                                    </button>

                                                    <div class="modal fade bs-example-modal-sm" tabindex="-1"
                                                         role="dialog" aria-labelledby="mySmallModalLabel">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <hr>
                                                                <div>Forgot password</div>
                                                                <hr>
                                                                <form action="{{url('/reset-password')}}" method="post">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <input type="text" name="email"
                                                                               class="form-control"
                                                                               style="width:80%; margin: auto" id=""
                                                                               required placeholder="enter your email">
                                                                        <br>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            send
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
