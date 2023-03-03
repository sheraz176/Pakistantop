@extends('admin.layouts.app')

@section('title')
    <title>Create | Religionmap</title>
@endsection
@push('styles')
<head>

    <link href="{{asset('admin/assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
</head>



@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Leaders</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Create</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Back</a></li>
            </ol>
        </div>

        <div class="row row-cards">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create Leaders</div>
                    </div>

                    <form action="{{ route('admin.leader.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control w-100" name="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group ">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control w-100" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group ">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control w-100" name="address" placeholder="Enter Address">
                        </div>
                        <div class="form-group ">
                            <input type="hidden" class="form-control w-100" name="place_id" value="{{$place->id}}" placeholder="place id">
                            <input type="hidden" class="form-control w-100" name="religion_id" value="{{$place->confession_type}}" placeholder="religion id">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload Images</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" >
                                <label class="custom-file-label">Upload Images</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload Icon</label>
                            <div class="custom-file">
                                <input type="file" name="icon" class="custom-file-input" >
                                <label class="custom-file-label">Upload Icon</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="content" name="description" placeholder="Enter Description"></textarea>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Publish</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    @endsection


    @push('scripts')

    <script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/assets/js/formeditor.js')}}"></script>
        @endpush
