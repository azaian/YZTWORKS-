@extends('layouts._heads')
@include('cpanel._navbar')

@section('body')
    <div class="container">
        <div class="details-box">
            <div class="box-logo">
                <img src="{{ url('resources/images/icons/logo.png')}}" alt="logo">
            </div>
            <div class="heading1">YZT-Works <br> <span>customer </span></div>
            <br>
            <br>
            <br>
            <div class="row sub-row">
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">Name: </span>
                    <span class="content"> {{$user->name}}</span>
                </div>
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">Email: </span>
                    <span class="content"> {{$user->email}}</span>
                </div>
            </div>
            <hr>
            <div class="row sub-row">
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">Job title: </span>
                    <span class="content"> {{$user->details->job_title}}</span>
                </div>
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">Phone: </span>
                    <span class="content"> {{$user->details->phone}}</span>
                </div>
            </div>
            <hr>
            <div class="row sub-row">
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">website: </span>
                    <span class="content"> <a href="http://{{$user->details->website}}">{{$user->details->website}}</a></span>
                </div>
                <div class="col-md-6 col-xs-12 ">
                    <span class="head">city: </span>
                    <span class="content"> {{$user->details->city}}</span>
                </div>
            </div>
            <hr>
            <div class="row sub-row">
                <div class=" col-xs-12 ">
                    <span class="head">Business & Industry: </span>
                    <br>
                    <span class="contentp"> {{$user->details->business}}</span>
                </div>
            </div>
            <hr> <div class="row sub-row">
                <div class=" col-xs-12 ">
                    <span class="head">Project requirement: </span>
                    <br>
                    <span class="contentp"> {{$user->details->business}}</span>
                </div>
            </div>
            <hr>
            <div class="row sub-row">
                <div class="col-md-6 col-xs-12 pull-right text-center ">
                    <span class="head">Registered on: </span>
                    <span class="content">{{date('d / m / Y',time($user->created_at))}} </span>
                </div>
            </div>
            <hr>

        </div>
    </div>

@endsection