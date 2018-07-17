@extends('layouts._heads')
@section('body')
    @include('layouts._navbar')
    <section>

        <div class="container main-container">

            <div id="carousel-example-generic" class="carousel slide" style="width: 105%;">


                <!-- Wrapper for slides -->
                <div class="carousel-inner" id="myCarousel" role="listbox">

                    <!-- First slide -->
                    <div class="item active deepskyblue">
                        <img src="{{url('/resources/images/slide1.jpg')}}" alt="">

                        <div class="carousel-caption cap-social">
                            <h3 data-animation="animated bounceInLeft" class="cap1">
                                Get Social
                            </h3>
                            <h3 data-animation="animated bounceInRight" class="cap11">
                                Your community is waiting. Connect with them.
                            </h3>
                        </div>
                    </div> <!-- /.item -->

                    <!-- Second slide -->
                    <div class="item skyblue">
                        <img src="{{url('/resources/images/slide2.jpg')}}" alt="">

                        <div class="carousel-caption cap-smart">
                            <h3 class="icon-container cap2" data-animation="animated bounceInDown">
                                Get Smarter
                            </h3>
                            <h3 class="cap22" data-animation="animated bounceInUp">
                                Measure performance and reduce response time, scaled human interaction.
                            </h3>
                        </div>
                    </div><!-- /.item -->

                    <!-- Third slide -->
                    <div class="item darkerskyblue cap-inter" style="    margin-bottom: 0px;">
                        <img src="{{url('/resources/images/slide3.jpg')}}" alt="">

                        <div class="carousel-caption" style="margin-bottom: 84px;">
                            <h3 class="icon-container cap3" data-animation="animated zoomInLeft">
                                Interact Efficiently
                            </h3>
                            <h3 class="cap33" data-animation="animated flipInX">
                                When you have strong relationships with your audience, more business flows naturally.
                            </h3>
                        </div>
                    </div><!-- /.item -->

                </div><!-- /.carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->

        </div><!-- /.container -->

    </section>
    <section class="section why-social-media " id="why-s-m">
        <div class="container">
            <h1 class="heading1">
                Why Social Media
            </h1>

            <div class="social-media-box">
                <h3>
                    <img src="{{url('resources/images/icons/1.png')}}" alt="icon" class=""> Your customers are on social
                    media.
                </h3>

                <p>
                    Regardless of your industry, your customers are using social media on daily basis. It is important
                    that
                    you keep them engaged and connected to your brand so that you’re always available and reachable.
                </p>
            </div>
            <div class="social-media-box box2">
                <h3>
                    <img src="{{url('resources/images/icons/2.png')}}" alt="icon" class=""> There are people searching
                    for your business.
                </h3>

                <p>
                    If your business is offering a product or service. definitely, there are people searching for it.
                    Our
                    social media management service will help your business to join the conversation and generate new
                    leads.
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="social-media-box">
                <h3>
                    <img src="{{url('resources/images/icons/3.png')}}" alt="icon" class=""> People are talking about
                    your business on social media.
                </h3>
                <p>
                    Even if you are not in social media, You need to listen to what your customers are saying about your
                    business on social media and respond to their concerns. Our social media management services focus
                    on
                    highlighting the positive or negative aspects of what your business is offering and responds
                    sincerely
                    to it.
                </p>
            </div>
            <p class="text-center">We offer professional Social Media services to clients in Ottawa, and across
                Canada.</p>
        </div>
    </section>

    <div class="clearfix"></div>
    <section class="section services" id="services" itemscope itemtype="http://schema.org/Service">
        <div class="container" itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog">
            <h2 class="heading2">
                Upgrade Your Business Through Social Media!
            </h2>

            <h1 class="heading1">
                MAIN SERVICES
            </h1>

            <div class="row" itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/Social%20Media%20Strategy%20.png')}}"
                                 class="center-block">
                            <span itemprop="name"><p class="text-center">Social Media Strategy Development</p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/Community%20Management%20png.png')}}"
                                 class="center-block">
                            <span itemprop="name"><p class="text-center">Community Management</p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/content.png')}}" class="center-block">
                            <span itemprop="name"><p class="text-center">Social Content Creation</p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/advac.png')}}" class="center-block">
                            <span itemprop="name"><p class="text-center">Social Advertising</p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/measure-icon.png')}}" class="center-block">
                            <span itemprop="name"><p class="text-center">Measurement & Monitoring</p></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 img-box">
                    <div class="col-lg-12">
                        <div class="icons-image">
                            <img src="{{url('/resources/images/icons/Promotions.png')}}" class="center-block">
                            <span itemprop="name"><p class="text-center">Promotions</p></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section why" id="why-us">
        <div class="container">
            <h1 class="heading1">WHY US</h1>

            <div class="row">
                <div class="col-md-6 col-xs-12  why-box">
                    <div class="">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/4.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>100% focused on social media marketing.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12  why-box">
                    <div class=" ">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/7.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>Believing in social promotions/Opportunities.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12  why-box">
                    <div class=" ">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/5.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>Building content strnd Passion Points.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12  why-box">
                    <div class=" ">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/8.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>Measuring the value of social media marketing.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12  why-box">
                    <div class="last-center">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/6.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>Thinking People first.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12  why-box">
                    <div class="">
                        <div class="col-xs-2 "><img src="{{url('resources/images/icons/9.png')}}" alt="icon" class="">
                        </div>
                        <div class="col-xs-10 padding-zero"><p>Maximize every cent of our client’s budget to deliver the
                                results that matter
                            </p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section subscribe">


        <p>
            Subscribe to our Newsletter and stay connected
            <span>        <button type="button" class="" data-toggle="modal"
                                  data-target=".bs-example-modal-news-sm"><i class="fa fa-envelope"
                                                                             aria-hidden="true"></i></button>
            </span>
        </p>
        <div class="modal fade bs-example-modal-news-sm" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div id="mc_embed_signup">
                        <form action="//yztworks.us13.list-manage.com/subscribe/post?u=e88652fb28485cef1cb10c010&amp;id=fb974a4aa1"
                              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              class="validate"
                              target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="form-group subscribe-form">
                                <label for="mce-EMAIL">Subscribe to our mailing list</label>
                                <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL"
                                       placeholder="email address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_e88652fb28485cef1cb10c010_fb974a4aa1" tabindex="-1"
                                           value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                                           class="button">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section pricing" id="pricing">
        <div class="container">
            <h1 class="heading1">
                pricing & packaging
            </h1>

            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-md-offset-0   ">
                    <br>

                    <div class="package">
                        <div class="p-head p1">
                            Works Lite<br>
                            499 CAD/mo
                            <br>
                        </div>
                        <div class="package-box">

                            <div class="p-description">
                                <b> 3 Campaigns per month includes:</b>
                                Creating strategy for facebook limited to the below:

                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Creating content:
                                </div>
                                <div class="p-content col-xs-3">
                                    15 Posts
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Designing:
                                </div>
                                <div class="p-content col-xs-3">
                                    10 Designs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Content Reach:
                                </div>
                                <div class="p-content col-xs-3">
                                    25k Views
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Leads/like:
                                </div>
                                <div class="p-content col-xs-3">
                                    +1k Likes
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Community Management:
                                </div>
                                <div class="p-content col-xs-3">
                                    30 Hrs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Statistics and analysis:
                                </div>
                                <div class="p-content col-xs-3" >
                                    1 Report
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-md-offset-0  ">
                    <div class="package">
                        <img src="{{url('/resources/images/icons/medal.png')}}" alt="medal">

                        <div class="p-head p2">
                            Works Social<br>
                            799 CAD/mo
                        </div>
                        <div class="package-box">

                            <div class="p-description">
                                <b> 5 Campaigns per month includes:</b>
                                Creating strategy for facebook limited to the below:
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Creating content:
                                </div>
                                <div class="p-content col-xs-3">
                                    30 Posts
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>

                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Designing:
                                </div>
                                <div class="p-content col-xs-3">
                                    20 Designs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Content Reach:
                                </div>
                                <div class="p-content col-xs-3">
                                    45k Views
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Leads/like:
                                </div>
                                <div class="p-content col-xs-3">
                                    2k:4k Likes
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Community Management:
                                </div>
                                <div class="p-content col-xs-3">
                                    60 Hrs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Statistics and analysis:
                                </div>
                                <div class="p-content col-xs-3">
                                    2 Reports
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-md-offset-0  ">
                    <br>

                    <div class="package">
                        <div class="p-head p3">
                            Works Pro<br>
                            1149 CAD/mo
                        </div>
                        <div class="package-box">

                            <div class="p-description">
                                <b> 8 Campaigns per month includes:</b>
                                Creating strategy for facebook and instagram:
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Creating content:
                                </div>
                                <div class="p-content col-xs-3">
                                    60 Posts
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Designing:
                                </div>
                                <div class="p-content col-xs-3">
                                    40 Designs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o ">
                                <div class="p-title col-xs-9">
                                    Content Reach:
                                </div>
                                <div class="p-content col-xs-3">
                                    90k Views
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Leads/like:
                                </div>
                                <div class="p-content col-xs-3">
                                    4k:6k Likes
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-o">
                                <div class="p-title col-xs-9">
                                    Community Management:
                                </div>
                                <div class="p-content col-xs-3">
                                    90 Hrs
                                </div>
                            </div>
                            <!--package item  -->
                            <div class="clearfix"></div>
                            <div class="p-box-e">
                                <div class="p-title col-xs-9">
                                    Statistics and analysis:
                                </div>
                                <div class="p-content col-xs-3">
                                    2 Reports
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="package-qoute">
                <p class="text-center">And We are ready to quote for different needs based on business scale.
                </p>
            </div>

            @if(Auth::check())
                @if(Auth::user()->isActive())
                    @if(Auth::user()->isAcceptContract())
                        <div class="paypal-list">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="ANZ7BXV5GF78J">
                                <table>
                                    <tr class="text-center">
                                        <td><input type="hidden" name="on0" value="FB Packages">FB Packages</td>
                                    </tr>
                                    <tr>
                                        <td><select name="os0">
                                                <option value="Works Lite">Works Lite $499.00 CAD</option>
                                                <option value="Works Social">Works Social $899.00 CAD</option>
                                                <option value="Works Pro">Works Pro $1,149.00 CAD</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="currency_code" value="CAD">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
                                       border="0"
                                       name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
                                     width="1"
                                     height="1">
                            </form>
                        </div>
                    @else
                    <!-- Button trigger modal -->
                        <div>
                            <a class="text-center btn btn-primary" style="display: block; margin: auto; width:200px "
                               href="{{url('agreement')}}">
                                First read our agreement
                            </a>
                        </div>

                    @endif
                @else
                    <div style="display: block; margin: auto; width: 171px;">
                        <div class="checkmail">please check your mail to active your acount</div>
                    </div>
                @endif
            @else
                <div><a style="display: block; margin: auto; width: 171px;"
                        href="{{url('register')}}"><img
                                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
                                alt=""></a>
                </div>


            @endif


        </div>
    </section>
    <section class="section clients hidden " id="clients">
        <div class="container">
            <h1 CLASS="heading1">our clients</h1>

            <div class="row">
                <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12 circle-client">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- client item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 client">
                    <div class="col-xs-12">
                        <img src="resources/images/item.jpg" alt="item" class="img-responsive">

                        <div class="fix-cover">
                            <div class="client-cover">
                                <h3>client name</h3>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts._footer')
@endsection