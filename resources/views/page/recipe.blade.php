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
    <!-- /bradcam_area  -->

    <!-- recepie_area_start  -->
    @section('content')

    @extends('page.recipe_listFood');
    <!-- /recepie_area_start  -->

    <!-- latest_trand     -->

    <!--/ latest_trand     -->

    <!-- download_app_area -->
    <div class="download_app_area plus_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="download_thumb">
                        <div class="big_img">
                            <img src="page/img/video/big_1.png" alt="">
                        </div>
                        <div class="small_01">
                            <img src="page/img/video/small_sm1.png" alt="">
                        </div>
                        <div class="small_02">
                            <img src="page/img/video/sm2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="download_text">
                        <h3>Download app to
                            get recipes from
                            Everywhere</h3>
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
    </div>
    @endsection
