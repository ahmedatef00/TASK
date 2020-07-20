
@extends('dashboard.index    ', ['title' => 'Edit Page'])

@section('content')

<script src="https://cdn.tiny.cloud/1/4pa3wwh9jhsm0puz28whwnzzzwxgzwn513ip2nxluj8srp8u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
			selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable  tinymcespellchecker',	
            
            menubar: false
		});
</script>

@if(session()->get('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div><br />
@endif  
<div class="card card-primary mt-5">


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-user mr-1"></i> Edit Page | {{ $page->feature }}</h3>
  <a href="{{url()->previous()}}" class="btn btn-default text-dark">                                         
                            <i class="material-icons">keyboard_backspace</i>
                            Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
  <!-- form start -->
  <form id="updateForm" method="POST" action="{{ route("pages.update",$page->id)}}"
    enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    <div class="card-body">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="feature" value="{{$page->feature}}" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control ckeditor" rows="5">{{$page->content}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>
    </div>
    <!-- /.card-body -->
</form>
</div>
</div>

@endsection
