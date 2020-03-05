@section('content')
    @extends('page.layouts.master2')
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Food Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <div class="recepie_details_area">
        <div class="container">

            @foreach($food as $id => $food )

            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_thumb">
                        <img src="{{asset($food->image)}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_info">
                        <h3>{{$food->name}}</h3>
                          <p>{{$food->description}}</p>
                        <div class="resepies_details">
                            <ul>
                                <li><p><strong>Rating</strong> : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </p></li>
                                <li><p><strong>Time</strong> : 30 Mins </p></li>
                                <li><p><strong>Category</strong> : Main Dish </p></li>
                                <li><p><strong>Tags</strong> :  Dinner, Main, Chicken, Dragon, Phoenix </p></li>
                            </ul>
                        </div>
                        <div class="links">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>

                        </div>
                        <p></p>
                        <p></p>

                        </ul><a href="/checkout/id={{$id}}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>

                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
    <!-- recepie_area_start  -->


@endsection
