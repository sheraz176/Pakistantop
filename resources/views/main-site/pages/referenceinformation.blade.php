@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.reference Information')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')
<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.reference Information')}}</a>
        </div>
        <h2 class="white">{{__('lang.reference Information')}}</h2>
        <p class="white">{{__('lang.Information about departments related to religious activities')}}</p>
        <img src="images/references-img.png" alt="" draggable="false">
    </div>
</div>

<div class="references">
    <div class="wrapper">
        <div class="list">
            @foreach ($reference_information as $key =>$reference_information)
            <div class="element">
                <span class="name">{{ $reference_information->reference_title  }}</span>
                <div class="text">
                    <p>{!! $reference_information->reference_descripition    !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush
