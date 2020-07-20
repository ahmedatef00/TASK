
@extends('dashboard.index    ', ['title' => 'Edit Post'])

@section('content')

<script src="https://cdn.tiny.cloud/1/4pa3wwh9jhsm0puz28whwnzzzwxgzwn513ip2nxluj8srp8u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
			selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',	
            
            menubar: false
		});
</script>
<div class="card card-primary mt-5">


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-user mr-1"></i> Edit Post | {{ $post->title }}</h3>
  <a href="{{url()->previous()}}" class="btn btn-default text-dark">                                         
                            <i class="material-icons">keyboard_backspace</i>
                            Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="card-body">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="input-group mt-4">
                            <label class="bmd-label-floating" for="inputGroupSelect01">Category</label>
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
           

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" class="form-control img-input" id="img">
            </div>

            <div class="form-group">
                <img src="{{url('images').'/'.$post->img}}" style="height: 100px;" class="img-thumbnail img-preview" alt="post image">
            </div>

            <div class="form-group">
                <label for="short_brief">short_brief</label>
                <input type="text" name="short_brief" value="{{$post->short_brief}}" class="form-control" id="short_desc">
            </div>

            <div class="form-group">
                <label for="read_more">read_more</label>
                <textarea name="read_more" id="desc" class="form-control"  >{{$post->desc}}
                
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
