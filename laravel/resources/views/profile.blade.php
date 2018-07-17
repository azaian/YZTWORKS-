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
                    <form action="{{ url('/profile/update-data') }}" method="post" class="form" role="form">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="name" placeholder="Full Name" type="text"
                                       required autofocus value="{{ Auth::user()->name }}"/>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input class="form-control" name="email" placeholder="Email" type="email" required
                                       value="{{ Auth::user()->email }}"/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input class="form-control" name="phone" placeholder="Phone Number" type="number"
                                       required value="{{ Auth::user()->details->phone }}"/>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input class="form-control" name="job_title" placeholder="Job Title:" type="text"
                                       required value="{{ Auth::user()->details->job_title }}"/>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <input class="form-control" name="city" placeholder="City" type="text" required
                                       value="{{ Auth::user()->details->city }}"/>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <input class="form-control" name="website"
                                       placeholder="Website (If applicable):( optional ) "
                                       type="text" value="{{ Auth::user()->details->website }}"/>
                            </div>


                            <div class="col-xs-12 col-md-12">
                                <textarea class="form-control" name="business"
                                          placeholder="Business & Industry:"
                                          required>{{ Auth::user()->details->business }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <textarea class="form-control" name="project_requirement"
                                          placeholder="Your project requirements:( optional )">{{ Auth::user()->details->project_requirement }}</textarea>
                            </div>
                        </div>
                        <input class="form-control" name="oldpassword" placeholder="current Password" type="password"
                               required/>
                        @if (Session::has('error'))
                            <div class="alert alert-danger text-center">
                                        <strong>{{Session('error') }}</strong>
                            </div>
                        @endif


                        <button class="form-control btn btn-register " type="submit">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
