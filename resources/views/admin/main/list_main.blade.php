@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List main</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">main</a></li>
                        <li class="breadcrumb-item active">list_main</li>
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
                                <th>title</th>
                                <th>description</th>
                                <th>image1</th>
                                <th>image2</th>

                                <th>image3</th>

                                <th>date create</th>
                                <th>update date</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($listMain as $key => $main)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$main->title}}</td>

                                    <td>{{$main->description}}</td>
                                    <td> <img src="{{ asset($main->image1)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>
                                    <td> <img src="{{ asset($main->image2)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>

                                    <td> <img src="{{ asset($main->image3)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>


                                    <td>{{$main->created_at}}</td>
                                    <td>{{$main->updated_at}}</td>
                                    <td>
                                        <a href="{{route('admin.main.edit_main',['id'=>$main->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                        </a>
                                        <a href="{{route('admin.main.delete',['id'=>$main->id])}}" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">delete</i>
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
