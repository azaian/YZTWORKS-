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
                                    <a href="#" class="active" id="login-form-link">Change password</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="{{ url('/new-password') }}"
                                          style="display: block;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$id}}" id="">
                                        <div class="form-group ">
                                            <input type="password" name="password" id="password" tabindex="2"
                                                   class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <button type="submit" class="form-control btn btn-login">
                                                        <i class="fa fa-btn fa-sign-in"></i> Change
                                                    </button>
                                                </div>
                                            </div>
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
@endsection
