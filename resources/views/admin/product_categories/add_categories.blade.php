@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">add catgories</h3>
                    </div>

                    <form  action="admin/product_categories/add_categories" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name = "type" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                            </div>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror









                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>





@endsection



