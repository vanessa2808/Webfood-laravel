
@section('content')
    @extends('page.layouts.master2')

    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Register to become our member</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Register</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('register') }}" method="POST"  enctype="multipart/form-data">
                        @csrf


                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Full name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="file" placeholder="avatar" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                            </div>
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            </div>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" placeholder="Retype password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>

                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Register</button>
                        </div>

                    </form>




                </div>

            </div>





        </div>
    </section>


