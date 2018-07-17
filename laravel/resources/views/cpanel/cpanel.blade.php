@extends('layouts._heads')
@include('cpanel._navbar')
@section('body')

  <div style="margin-top: 8%">
      @if (Session::has('msg'))
          <div class="alert alert-success text-center">
              <strong>{{Session::pull('msg') }}</strong>
          </div>
      @endif
        <h1 class="heading1"> YZT-Works Control Panel</h1>
        <img class="center-block" src="{{url('resources/images/icons/logo.png')}}" alt="">
    </div>

@endsection