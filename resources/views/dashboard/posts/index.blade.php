@extends('dashboard.index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            @if(session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div><br />
            @endif

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#postModal">Add
                        post</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title ">posts</h4>
                            <p class="card-category"> list of all our posts</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">


                                <table class="table text-center">                                   
                                     <thead class=" text-primary">                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Short Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $index => $post)
                    
                                    <tr>
                                        <td class="table-col">{{$index + 1}}</td>
                                        <td class="table-col">{{$post->title}}</td>
                                        <td class="table-col"><img src="{{url('images').'/'.$post->img}}" style="width: 100px; height: 75px;" alt=""></td>
                                        <td class="table-col">{{$post->short_brief}}</td>
                    
                    
                                        <td class="row justify-content-center align-items-center" style="height: 100px;">
                    
                                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-info mr-2"><i class="fa fa-edit"></i> Edit</a>
                    
                                            <form action="{{route('posts.destroy', $post->id)}}" method="post" class="mb-0">
                                                @csrf
                                                @method('DELETE')
                    
                                                <button type="submit" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       

        <!-- Begin post Form Modal-->
        <div class="col-md-12 modal fade" role="dialog" id="postModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="col-md-10 modal-content card">
                    <div class="card-header card-header-primary modal-header">
                        <h4 class="card-title">post Form</h4>
                    </div>
                    <div class="card-body modal-body">
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="input-group mt-4">
                                            <label  for="users" class="bmd-label-floating" for="inputGroupSelect01">Users</label>
                                            <select  name="user_id" class="custom-select form-control" style="color: #fff;
                                            border: 1px solid #aaa;
                                            background: #20293f;
                                            padding: 5px;" id="inputGroupSelect01">
                                                <option value="">Choose...</option>
                                                @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">short_brief</label>
                                        <textarea name="short_brief" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">read_more</label>
                                        <input type="text" class="form-control" name="read_more">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                   
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Upload Picture</label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control custom-file-input"
                                                id="inputGroupFile01" name="img">

                                            <label class="form-control custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row justify-content-end">
                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                    </div>
                    <div class="clearfix"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End post Form Modal-->


</div>
<!-- End post Form Modal-->




@endsection