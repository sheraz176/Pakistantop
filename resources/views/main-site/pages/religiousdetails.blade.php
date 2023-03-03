@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Religion and society')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')

<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.Religion and society')}}</a>
            <span>></span>
            <a href="">{{ $religion_and_socity->title }}</a>
        </div>
        <h2 class="white">{{ $religion_and_socity->title }}</h2>
        <p class="white">{{__('lang.Information about religion')}}</p>
        <img src="{{ Storage::url($religion_and_socity->image) }}" alt="" draggable="false">
    </div>
</div>

<div class="religion-desc">
    <div class="wrapper">
        <div class="cols">
            <div class="col-70">
                <div class="page-text">
                    <p><strong>{{ $religion_and_socity->title }}</strong>&nbsp{!! $religion_and_socity->description !!}</p>


                </div>
                <div class="sub-confessions">
                </div>
            </div>
            <div class="col-30">
                @if (!empty($religion_and_socity->icon_id))
                <img src="{{$religion_and_socity->icon->url}}" alt="" draggable="false" />
                <p>{{ $religion_and_socity->intro }}</p>
                @endif

            </div>
        </div>
    </div>
</div>

<div class="religious-buildings">
    <div class="wrapper">
        <h2>{{__('lang.Religious buildings')}}</h2>
        <div class="list">
            @foreach ($buildings as $key => $building)
            <a href="{{route('object.detail',$building->id)}}" class="object">
                <div class="photo">
                    <img src="{{ Storage::url($building->image) }}" alt="" draggable="false">
                </div>
                <span class="info">{{$building->title}}</span>
            </a>
            @endforeach
        </div>
        <a href="{{route('main-site.pages.buildingshow')}}" class="read-more">{{__('lang.More')}}</a>
    </div>
</div>

<div class="missioners-list">
    <div class="wrapper">
        <h2>{{__('lang.Leaders')}}</h2>
        <div class="list with-margin">

            @foreach ($leaders as $key => $leader)
            <a href="{{route('leader.leaderdetail',$leader->id)}}" class="element">
                <span class="photo">
                    <img class="photo" src="{{ Storage::url($leader->image) }}" alt="" draggable="false" />
                </span>
                <span class="full-name">{{$leader->name}}</span>
            </a>
       @endforeach


        </div>
        <a href="{{route('main-site.pages.leader')}}" class="read-more">{{__('lang.More')}}</a>
    </div>
</div>

<div class="city-situation big-padding">
    <div class="wrapper">
        <div class="cols">
            <div class="col-30"></div>
            <div class="col-70">
                <h2>{{__('lang.missionaries')}}</h2>
                <p>{{__('lang.This section contains a list of missionaries in the city of Almaty')}}</p>
                <a href="#" class="read-more">{{__('lang.More')}}</a>
            </div>
        </div>
    </div>
</div>






@endsection

@push('scripts')

@endpush

