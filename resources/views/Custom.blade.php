@extends('layout.index', ['title' => ucwords($page->feature) ])

@section('content')
<div class="container-fluid p-5" style="height: 90vh">
    {!! $page->content !!}
</div>

@endsection
