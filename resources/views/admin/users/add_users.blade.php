@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="content-wrapper">
    <div class="card card-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add users</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/users/add_users" method="POST" enctype="multipart/form-data"
                              class="form-horizontal">
                            @csrf

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">role_id</label>
                                    <select name="role_id" class="form-control"
                                            data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option selected="selected">1</option>
                                        <option>0</option>

                                    </select>
                                </div>

                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter name">
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product avatar: </label>
                                    <input type="file" class="form-control" id="exampleInputName"
                                           placeholder="Enter avatar" name="avatar">

                                </div>
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>

                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1"
                                                   name="gender">
                                            <label for="customRadio1" class="custom-control-label">Female</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2"
                                                   name="gender" checked>
                                            <label for="customRadio2" class="custom-control-label">Male</label>
                                        </div>

                                </div>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror


                                <div class="form-group">
                                    <label for="exampleInputEmail1">date of birth</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" name="dateofbirth" class="form-control"
                                               data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
                                               data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->


                                @error('dateofbirth')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                                               placeholder="Enter phone">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror

                                <label for="exampleInputEmail1">Email</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputEmail1">password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter password">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>


                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">add users</button>
                                <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
