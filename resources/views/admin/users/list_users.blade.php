@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active">list_users</li>
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
                                <th>Role</th>
                                <th>Name</th>
                                <th>gender</th>
                                <th>Date of birth</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date create</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listUsers as $key => $users)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if($users->role_id == "0")
                                        Admin
                                    @else
                                        User
                                    @endif
                                </td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->gender}}</td>
                                <td>{{$users->dateofbirth}}</td>
                                <td>{{$users->phone}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->created_at}}</td>

                                <td>
                                    <a href="{{route('admin.users.edit_users',['id'=>$users->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                    </a>
                                    <a href="{{route('admin.users.delete',['id'=>$users->id])}}" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">delete</i>
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
