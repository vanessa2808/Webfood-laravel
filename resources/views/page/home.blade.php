@section('content')
    @extends('page.layouts.master')

    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 ">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>
                                    @foreach($header as $hd)
                                        {{$hd->title}}
                                        @endforeach
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- recepie_area_start  -->
    <div class="recepie_area">
        <div class="container">
            <div class="row">
                @foreach($food as $food)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="{{asset($food->image)}}" alt="">
                        </div>
                        <h3>{{$food->name}}</h3>
                        <span>{{$food->chef}}</span>
                        <p>Time Needs: {{$food->time}}</p>
                        <a href="#" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
                    @endforeach


            </div>
        </div>
    </div>
    <!-- /recepie_area_start  -->

    <!-- recepie_videos   -->
    <div class="recepie_videoes_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    @foreach($main as $main)
                    <div class="recepie_info">
                        <h3>{{$main->title}}</h3>
                        <p>{{$main->description}}</p>
                        <div class="video_watch d-flex align-items-center">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=lr6AMBsjxrY"> <i class="ti-control-play"></i> </a>
                            <div class="watch_text" >
                                <h4>Watch Video</h4>
                                <p>You will love our execution</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="videos_thumb">
                        <div class="big_img">
                            <img src="{{asset($main->image3)}}" alt="">
                        </div>
                        <div class="small_thumb">
                            <img src="{{asset($main->image1)}}" alt="">
                        </div>
                        <div class="small_thumb_2">
                            <img src="{{asset($main->image2)}}" alt="">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="dish_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="dish_wrap d-flex">

                        <div class="single_dish text-center">
                            @foreach($blog as $bl)


                            <div class="thumb">

                                <img src="{{asset($bl->image)}}" alt="">
                            </div>
                            <h3>{{$bl->title}}</h3>
                            <p> {{$bl->description}}</p>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ dish_area start  -->

    <!-- latest_trand     -->

    <!--/ latest_trand     -->

    <!-- customer_feedback_area  -->
    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Feedback From Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially <br> in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="customer_active owl-carousel">
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="page/img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="page/img/testmonial/1.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="page/img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="page/img/testmonial/1.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="page/img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / customer_feedback_area  -->

    <!-- download_app_area -->
    <div class="download_app_area">
        @foreach($sidebar as $sb)
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="download_thumb">
                        <div class="big_img">
                            <img src="{{asset($sb->image3)}}" alt="">
                        </div>
                        <div class="small_01">
                            <img src="{{asset($sb->image2)}}" alt="">
                        </div>
                        <div class="small_02">
                            <img src="{{asset($sb->image1)}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="download_text">
                        <h3>{{$sb->title}}</h3>
                        <div class="download_android_apple">
                            <a class="active" href="#">
                                <div class="download_link d-flex">
                                    <i class="fa fa-apple"></i>
                                    <div class="store">
                                        <h5>Available</h5>
                                        <p>on App Store</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="download_link d-flex">
                                    <i class="fa fa-android"></i>
                                    <div class="store">
                                        <h5>Download</h5>
                                        <p>from Play Store</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
