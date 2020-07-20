@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8">

                @foreach ($posts as $post) 
                @include('Post')
                @endforeach
</div>
@endsection
