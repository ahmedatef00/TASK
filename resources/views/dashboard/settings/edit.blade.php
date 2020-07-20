@extends('dashboard.index', ['title' => 'Edit Settings'])

@section('content')
@if(is_null($setting))
<div class="alert alert-warning">
    <strong>Sorry!</strong> No Settings Found.
</div>
@else

<div class="card card-primary mt-5">


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-file-alt mr-1"></i> Edit @lang('site.settings')</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark">
                <i class="material-icons">keyboard_backspace</i>
                Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('settings.update', $setting->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                <label for="site_name">Site Name</label>
                <input type="text" name="site_name" value="{{$setting->site_name}}" class="form-control" id="site_name"
                    required>
            </div>

            <div class="form-group">
                <label>Select Menu Elements</label>

                @if ($pages->count())

                @foreach ($pages as $page)

                <div class="form-check form-check-inline">
                    <label class="form-check-label"
                        for="{{str_replace(' ', '-', $page->feature)}}">{{$page->feature}}</label>
                    <input class="form-check-input" name="show[]" value="{{$page->id}}" class="form-check-input"
                        id="{{str_replace(' ', '-', $page->feature)}}" {{$page->show == 1 ? 'checked' : ''}}
                        type="checkbox" id="inlineCheckbox1" value={{ $page->id }}>
                    <span class="form-check-sign">
                        <span class="check"></span>
                    </span>
                    </label>
                </div>
                @endforeach
                @else
                <p>No pages added.</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>

        </div>
        <!-- /.card-body -->
    </form>

</div>
@endif

@endsection
<script>



</script>