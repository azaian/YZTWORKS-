@extends('layouts._heads')
@include('cpanel._navbar')
@section('body')
    <div class="addadmin" id="#addadmin">
        <form action="{{url('admin/add-admin')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" required value="">
                <button class="btn btn-primary" type="submit">add as admin</button>
            </div>
        </form>

        @if(Session::has('msg'))
            <div class="alert alert-success text-center">
                {{session()->pull('msg')[0]}}
            </div>
        @endif
    </div>
    <div class=" container old-admins">
        <div class="row admin-row">
            <div class="col-md-6">Admins</div>
            <div class="col-md-2 pull-right admin-delete text-center">Delete admin</div>
        </div>
        @foreach($admins as $admin)
            <div class="row admin-row">
                <div class="col-md-6">{{$admin->email}}</div>
                <div class="col-md-2 pull-right admin-delete text-center">
                    @if(count($admins)<=1)
                        can't delete
                    @else
                        <a href="{{url('admin/delete-admin/'.$admin->id)}}">X</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
