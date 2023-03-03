@extends('admin.layouts.app')

@section('title')
    <title>Dashboard | Pakistantop</title>
@endsection
@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-success text-success">
                                <i class="fa fa-newspaper-o text-white"></i>
                            </div>
                            <h5>Total News</h5>
                            <h2 class="counter">{{$news_count}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-primary text-primary">
                                <i class="fa fa-paper-plane    text-white"></i>
                            </div>
                            <h5>Pakistan top Category</h5>
                            <h2 class="counter">{{$leave_request_count}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-info text-info">
                                <i class="fa fa-video-camera   text-white"></i>
                            </div>
                            <h5>Total Videos</h5>
                            <h2 class="counter">{{$videos_count}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('admin/assets/js/index3.js')}}"></script>
@endpush
