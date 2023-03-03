@extends('admin.layouts.app')

@section('title')
    <title>Show | Religionmap</title>
@endsection
@push('styles')
@endpush

@section('content')



    <div class="app-content">
        <div class="side-app">

            <div class="page-header">
                <h4 class="page-title">News Uploaded </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">News Uploaded</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Show</li> --}}
                </ol>

            </div>






            <div class="card">
                @include('error.error')

                <div class="page-text">
                    <div class="wrapper">

                        <div class="article">
                    <img class="main-photo" src="{{ Storage::url($news->image) }}" alt="" draggable="false" style="height:350px;width:997px; ">
                    <h2>{{ $news->news_title }}</h2>
                            <p style="text-align: justify;">{!! $news->news_description !!}</p>


                            <div class="date">{{ $news->created_at }}</div>
                        </div>
                    </div>
                </div>





                    @endsection
                    @push('scripts')

                        <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
                    @endpush
