@extends('admin.layouts.app')

@section('title')
    <title>Edit | Pakistantop</title>
@endsection
@push('styles')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Job board Admin template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="bootstrap job board template, bootstrap job template"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">


    <!-- Sidemenu Css -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet" />


    <!-- Bootstrap Css -->
    <link href="../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/admin-custom.css" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- WYSIWYG Editor css -->
    <link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

    <!-- p-scroll bar css-->
    <link href="../assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="../assets/css/icons.css" rel="stylesheet"/>

    <!-- Color-Skins -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/color-skins/color-skins/color10.css" />
</head>



@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">News</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
                        <div class="card-title">Edit News</div>
                    </div>

                    <form action="{{ route('admin.news.update',[$news->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Enter Title</label>
                            <input type="text" class="form-control w-100" name="news_title" value="{{ $news->news_title }}">
                        </div>

                        <div class="form-group ">
                            <label class="form-label">Select Categorys</label>
                            <select  class="custom-select my-1 mr-sm-2" value="{{ $news->category }}" name="category" id="inlineFormCustomSelectPref">
                                @foreach ($category as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <img src="{{ Storage::url($news->image) }}" width="300px">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="custom-file-label">Upload Images</label>
                                    <input type="file" name="image" class="custom-file-input" >

                                </div>
                            </div>

                        <div class="form-group w-100">
                            <label class="form-label">Description</label>
                            <textarea class="form-control w-100" name="news_description"  rows="7">{!! $news->news_description !!}</textarea>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection



