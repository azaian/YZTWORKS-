@extends('layouts._heads')
@include('layouts._profile_navbar')
@section('body')
    <div class="backgr" xmlns="http://www.w3.org/1999/html">

        <!-- Start The Registration Form -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                    <legend><p>My profile data</p></legend>
                    @if (Session::has('msg'))
                        <div class="alert alert-success text-center">
                            <strong>{{Session('msg') }}</strong>
                        </div>
                    @endif
                    <form action="{{ url('/profile/change-password') }}" method="post" class="form" role="form">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-xs-12 col-md-12">
                                <input class="form-control" name="oldpassword"
                                       placeholder="current password"
                                       type="password" value=""/>
                                @if (Session::has('error-oldpass'))
                                    <div class="alert alert-danger text-center">
                                        <strong>{{Session('error-oldpass') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <input class="form-control" name="password1"
                                       placeholder="enter new password"
                                       type="password" value=""/>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <input class="form-control" name="password2"
                                       placeholder="enter new password again"
                                       type="password" value=""/>
                                @if (Session::has('error-pass'))
                                    <div class="alert alert-danger text-center">
                                        <strong>{{Session('error-pass') }}</strong>
                                    </div>
                                @endif
                            </div>



                            <button class="form-control btn btn-register " type="submit">
                                Update
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
