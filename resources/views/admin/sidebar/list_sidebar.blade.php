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
                                <th>image1</th>
                                <th>image2</th>

                                <th>image3</th>

                                <th>date create</th>
                                <th>update date</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($listSidebar as $key => $sidebar)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$sidebar->title}}</td>

                                    <td> <img src="{{ asset($sidebar->image1)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>
                                    <td> <img src="{{ asset($sidebar->image2)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>

                                    <td> <img src="{{ asset($sidebar->image3)}}" style="width: auto; height: auto;max-width: 150px;max-height: 150px"></td>


                                    <td>{{$sidebar->created_at}}</td>
                                    <td>{{$sidebar->updated_at}}</td>
                                    <td>
                                        <a href="{{route('admin.sidebar.edit_sidebar',['id'=>$sidebar->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                        </a>
                                        <a href="{{route('admin.sidebar.delete',['id'=>$sidebar->id])}}" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">delete</i>
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
