@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">add blog</h3>
                    </div>

                    <form action="{{route('admin.blog.edit_blog',['id'=>$idBlog->id])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{$idBlog->title}}">
                            </div>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail1">description</label>
                                <textarea type="text" class="form-control" id="description"
                                          placeholder="Enter description" name="description">
                                    <div>"{{$idBlog->description}}"</div>
                                </textarea>


                            </div>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div><img src="{{ asset($idBlog->image)}}"
                                      style="width: auto; height: auto;max-width: 150px;max-height: 150px"></div>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail1">writer</label>
                                <input type="text" class="form-control" placeholder="Enter writter" name="writer" value="{{$idBlog->writer}}">
                            </div>
                            @error('writer')
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
</div>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>


@endsection



