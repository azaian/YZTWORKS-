@extends('layouts._heads')
@include('layouts._login_navbar')
@section('body')
    
    @if(Session::has('msg'))
        
     <div style="height:200px;margin-top: 200px;">   <div class="alert alert-success text-center">
            {{session()->pull('msg')[0]}}
        </div>
        </div>
    @else
        <?php
        return redirect('/')
        ?>
    @endif
    @include('layouts._footer')
@endsection
