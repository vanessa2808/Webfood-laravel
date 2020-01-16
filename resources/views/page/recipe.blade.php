@section('content')

    @extends('page.layouts.master2')

        <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Chicken Recipes</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recepie_area plus_padding">
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

    <!-- download_app_area -->
    <div class="download_app_area plus_padding">
        <div class="container">
            @foreach($sidebar as $sb)
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="download_thumb">
                        <div class="big_img">
                            <img src="{{asset($sb->image1)}}" alt="">
                        </div>
                        <div class="small_01">
                            <img src="{{asset($sb->image2)}}" alt="">
                        </div>
                        <div class="small_02">
                            <img src="{{asset($sb->image3)}}" alt="">
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
                @endforeach
        </div>
    </div>
    @endsection
