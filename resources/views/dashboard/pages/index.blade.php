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
                        page</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title ">pages</h4>
                            <p class="card-category"> list of all our pages</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">


                                <table class="table text-center">                                   
                                     <thead class=" text-primary">                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Feature</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $index => $page)
                    
                                    <tr>
                                        <td class="table-col">{{$index + 1}}</td>
                                        <td class="table-col">{{$page->feature}}</td>

                    
                        
                                        <td class="row justify-content-center align-items-center" style="height: 100px;">
                    
                                            <a href="{{route('pages.edit', $page->id)}}" class="btn btn-sm btn-info mr-2"><i class="fa fa-edit"></i> Edit</a>
                    
                                            <form action="{{route('pages.destroy', $page->id)}}" method="POST" class="mb-0">
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
       

        <!-- Begin page Form Modal-->
        <div class="col-md-12 modal fade" role="dialog" id="postModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="col-md-10 modal-content card">
                    <div class="card-header card-header-primary modal-header">
                        <h4 class="card-title">page Form</h4>
                    </div>
                    <div class="card-body modal-body">
                        <form method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Feature</label>
                                        <input type="text" class="form-control" name="feature">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Content</label>
                                        <textarea type="text" class="form-control" name="content"></textarea>
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
    <!-- End page Form Modal-->


</div>
<!-- End page Form Modal-->



@endsection