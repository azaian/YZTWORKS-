<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="logo"><img src="{{ url('resources/images/icons/logo.png')}}" alt=""></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <a href="{{url('/')}}">Website</a>
                    </li>
                    <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <a href="{{url('/admin/users-data')}}">Users data</a>
                    </li>
                    <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <a href="{{url('admin/add-admin')}}">add admin</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <a href="{{url('/admin/change-password')}}">change password</a>
                            </li>
                            <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <a href="{{url('/logout')}}">Logout</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>