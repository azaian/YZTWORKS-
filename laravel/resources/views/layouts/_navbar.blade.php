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

            @if(Auth::check())

                @if(Auth::user()->isActive())

                    @else
                    <div class="checkmail">check your email to active your account <a href="{{url('/logout')}}">logout</a></div>
                @endif
            @else
                <div class="login "><a href="{{url('login')}}">Login</a></div>
                <div class="sign-up "><a href="{{url('register')}}">Sign up</a></div>
        @endif

        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="#home">HOME</a>
                    </li>
                    <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="#why-s-m">WHY SOCIAL MEDIA</a>
                    </li>
                    <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="#services">SERVICES</a></li>
                    <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="#why-us">WHY US</a></li>
                    <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="#pricing">PRICING &
                            PACKAGING</a></li>
                    <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="#contact">CONTACT</a></li>
                    @if(Auth::check())
                       <li data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><a href="{{url("/profile")}}">PROFILE</a></li>
                    @endif

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>