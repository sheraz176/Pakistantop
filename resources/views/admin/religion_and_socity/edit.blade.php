@extends('admin.layouts.app')

@section('title')
    <title>Edit | Religionmap</title>
@endsection
@push('styles')
<link href="{{ asset('admin/assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />




@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Religion and Socity</h4>
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
                        <div class="card-title">Edit</div>
                    </div>

                    <form action="{{ route('admin.religion_and_socity.update',[$religion_and_socity->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Enter Title</label>
                            <input type="text" class="form-control w-100" name="title" value="{{ $religion_and_socity->title }}">
                        </div>

                        <div class="form-group ">
                            <label class="form-label">Enter Intro</label>
                            <input type="text" class="form-control w-100" name="intro" value="{{ $religion_and_socity->intro }}">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <img src="{{ Storage::url($religion_and_socity->image) }}" width="300px">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="custom-file-label">Upload Images</label>
                                    <input type="file" name="image" class="custom-file-input" >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Icon Select</label>
                                @foreach ($icons as $icon)
                                <label class="radio-inline">
                                    <input type="radio" name="icon" {{$religion_and_socity->icon_id==$icon->id?'checked':''}} style="margin-top: 30px" required value="{{$icon->id}}" ><img class="mt-2" style="height: 53px;" src="{{$icon->url}}" alt="">
                                  </label>

                                @endforeach

                            </div>

                        <div class="form-group w-100">
                            <label class="form-label">Description</label>
                            <textarea class="content form-control w-100" name="description"  rows="7">{!! $religion_and_socity->description !!}</textarea>
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


    @push('scripts')
    <script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/assets/js/formeditor.js')}}"></script>
    @endpush



