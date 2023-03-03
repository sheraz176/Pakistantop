@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Regulations')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')

<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.Legal acts')}}</a>
        </div>
        <h2 class="white">{{__('lang.Legal acts')}}</h2>
        <p class="white">{{__('lang.List of legal documents')}}</p>
        <img src="images/regulations-img.png" alt="" draggable="false">
    </div>
</div>

<div class="regulations">
    <div class="wrapper">
        <h2>{{__('lang.Regulations')}}</h2>


        <div class="list">
            <ul class="col">
             @foreach ($Regulations as $key =>$regulations)
                <li class="item docx">
                    <a target="_blank" href="{{ Storage::url($regulations->file) }}">{{ $regulations->title }}</a>
                </li>
                 @endforeach

            </ul>
        </div>

        <div class="pagination">
            {{ $Regulations->links('main-site.pages.partials.news-pagination') }}
        </div>
    </div>
</div>
</div>

@endsection

@push('scripts')

@endpush
