@extends('layouts._heads')
@include('cpanel._navbar')
@section('body')

    <div class=" container old-admins">
        <div class="row admin-row">
            <div class="col-md-3 text-center"><b>Name</b></div>
            <div class="col-md-3 admin-delete text-center"><b>Email</b></div>
            <div class="col-md-3  admin-delete text-center"><b>Phone</b></div>
            <div class="col-md-1 admin-delete text-center"><b>State</b></div>
            <div class="col-md-2 admin-delete text-center"><b>Details</b></div>
        </div>
        @foreach($users as $user)
            <div class="row admin-row">
                <div class="col-md-3">{{$user->name}}</div>
                <div class="col-md-3 admin-delete text-center">{{$user->email}}</div>
                <div class="col-md-3  admin-delete text-center">{{$user->details->phone}}</div>
                <div class="col-md-1  admin-delete text-center">
                @if($user->active==1)
                {{'Active'}}
                @else
                {{'Deactivate'}}
                @endif
                </div>
                <div class="col-md-2  admin-delete text-center"><a href="{{url('admin/user-details/'.$user->id)}}">details</a></div>
            </div>
        @endforeach
    </div>
@endsection
