@extends('admin.layouts.app')

@section('title')
    <title>Create | Pakistantop</title>
@endsection
@push('styles')
<head>
    <link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />
</head>



@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">News</h4>
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
                        <div class="card-title">Create News</div>
                    </div>

                    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Enter Title</label>
                            <input type="text" class="form-control w-100" name="news_title" placeholder="Enter Title here">
                        </div>
                        <div class="form-group ">
                            <label class="form-label">Select Categorys</label>
                            <select  class="custom-select my-1 mr-sm-2" name="category" id="inlineFormCustomSelectPref">
                                @foreach ($category as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach


                            </select>
                        </div>


                        <div class="form-group">
                            <label class="form-label">Upload Images</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" >
                                <label class="custom-file-label">Upload Images</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="content" name="news_description" placeholder="Enter Description"></textarea>
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
<!-- WYSIWYG Editor js -->
<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
<script src="../assets/js/formeditor.js"></script>
        @endpush
