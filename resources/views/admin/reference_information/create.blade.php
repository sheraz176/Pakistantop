@extends('admin.layouts.app')

@section('title')
    <title>Create | Religionmap</title>
@endsection
@push('styles')
<head>





    <!-- WYSIWYG Editor css -->
    <link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />





@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Reference Information</h4>
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
                        <div class="card-title">Create</div>
                    </div>

                    <form action="{{ route('admin.reference_information.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control w-100" name="reference_title" placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Descripition</label>
                            <textarea class="content" name="reference_descripition" placeholder="Descripition"></textarea>
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
