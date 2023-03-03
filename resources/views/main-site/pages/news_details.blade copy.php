@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.News')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')
<div class="page-header small-page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.News')}}</a>
            <span>></span>
            <a href="">{{ $news->news_title}}</a>
        </div>
    </div>
</div>

<div class="page-text">
    <div class="wrapper">
        <h2>{{ $news->news_title }}</h2>
        <div class="article">
            <img class="main-photo" src="{{ Storage::url($news->image) }}" alt="" draggable="false" style="height:550px;width:997px; ">
            <p style="text-align: justify;">{!! $news->news_description !!}</p>


            <div class="date">{{ $news->created_at }}</div>
        </div>
    </div>
</div>













@endsection

@push('scripts')

@endpush
