@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List about</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">about</a></li>
                        <li class="breadcrumb-item active">list_about</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>

                                <th>image</th>
                                <th>title</th>
                                <th>description</th>
                                <th>date create</th>
                                <th>update date</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($listAbout as $key => $about)
                                <tr>
                                    <td>{{$key +1}}</td>

                                    <td> <img src="{{ asset($about->image)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>
                                    <td>{{$about->title}}</td>

                                    <td>{{$about->description}}</td>

                                    <td>{{$about->created_at}}</td>
                                    <td>{{$about->updated_at}}</td>
                                    <td>
                                        <a href="{{route('admin.about.edit_about',['id'=>$about->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                        </a>
                                        <a href="{{route('admin.about.delete',['id'=>$about->id])}}" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">delete</i>
                                        </a>

                                    </td>


                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
