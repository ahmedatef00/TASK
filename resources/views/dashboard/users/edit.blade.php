@extends('dashboard.index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" id="exampleModal">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('users.store', $user->id)}}" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            @csrf



                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <br>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary pull-right">Edit User</button>
                            </div>
                            <a href="{{url()->previous()}}" class="btn btn-default text-dark">
                                <i class="material-icons">keyboard_backspace</i>
                                Back</a>

                            <div class="clearfix"></div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection