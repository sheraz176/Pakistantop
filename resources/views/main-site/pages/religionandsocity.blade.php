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
        </div>
        <h2 class="white">{{__('lang.Religion and society')}}</h2>
        <p class="small white">{{__('lang.All officially registered denominations of the city of Almaty are collected here')}}</p>
        <img src="images/religion-and-society-img.png" alt="" draggable="false">
    </div>
</div>

<div class="confessions-list">
    @foreach ($religion_and_socity as $key =>$religion_and_socity)
    @if($key % 2 == 0)
    <div class="conf-element">
        <div class="wrapper">
            <div class="col-30">
                <img src="{{ Storage::url($religion_and_socity->image) }}" alt="" draggable="false" />
            </div>
            <div class="col-70">
                <h2> {{ $religion_and_socity->title }}</h2>
                <p>{!! $religion_and_socity->description !!}</p>
                <a class="read-more" href="{{route('main-site.pages.religiousdetails',$religion_and_socity->id)}}">Подробнее</a>
            </div>
        </div>
    </div>
 @else
    <div class="conf-element">
        <div class="wrapper">
            <div class="col-30">
                <img src="{{ Storage::url($religion_and_socity->image) }}" alt="" draggable="false" />
            </div>
            <div class="col-70">
                <h2> {{ $religion_and_socity->title }}</h2>
                <p>{!! $religion_and_socity->description !!}</p>
                <a class="read-more" href="{{route('main-site.pages.religiousdetails',$religion_and_socity->id)}}">Подробнее</a>
            </div>
        </div>
    </div>
    @endif
    @endforeach


</div>

<div class="city-situation big-padding">
    <div class="wrapper">
        <div class="cols">
            <div class="col-30"></div>
            <div class="col-70">
                <h2>{{__('lang.Places of sale of religious literature and paraphernalia')}}</h2>
                <p>{{__('lang.This section contains a list of places in Almaty where you can buy religious literature and various religious attributes')}}</p>
                <a href="/ru/objects?confession_id=&type=Места+реализации+религиозной+литературы+и+атрибутики"
                    class="read-more">{{__('lang.List of places')}}</a>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush
