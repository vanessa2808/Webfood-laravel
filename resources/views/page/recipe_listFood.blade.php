<div class="recepie_area plus_padding">
    <div class="container">
        <div class="row">
            @foreach($listFood as $key => $food)

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
