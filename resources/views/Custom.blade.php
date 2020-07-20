@extends('layouts.app', ['title' => ucwords($page->title??'') ])

@section('content')
<div class="container-fluid p-5" style="height: 90vh">

    {!!$page->content??''!!}
</div>

@endsection