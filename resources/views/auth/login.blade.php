
@section('content')
    @extends('page.layouts.master2')

    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Login to buy our food</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Login</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('login') }}" method="POST"  enctype="multipart/form-data">
                        @csrf


                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>



                        <div class="col-6">
                            <div class="form-group">
                                <input type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror
                        </div>



                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Register</button>
                        </div>

                    </form>




                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Da Nang, Viet Nam.</h3>
                            <p>, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0 376 381 262</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>yenrion9941@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>

            </div>





        </div>
    </section>


