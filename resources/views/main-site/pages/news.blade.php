@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.News')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')


<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.News')}}</a>
        </div>
        <h2 class="white">{{__('lang.News')}}</h2>
        <p class="white">{{__('lang.Information in the format of news about current events of the religious world in the city of Almaty')}}</p>
        <img src="images/news-img.png" alt="" draggable="false">
    </div>
</div>

<div class="news no-bg">
    <div class="wrapper">
        <div class="carousel">
            @foreach ($News as $key =>$news)

            <a href="{{route('main-site.pages.news-details',$news->id)}}" class="element">
                <div class="photo">
                    <img src="{{ Storage::url($news->image) }}" alt="" draggable="false">
                </div>
                <div class="info">
                    <p>{{ $news->created_at  }}</p>
                    <span>{{ $news->news_title  }}</span>
                </div>
            </a>

            @endforeach


        </div>

        <div class="pagination">


            {{ $News->links('main-site.pages.partials.news-pagination') }}
        </div>
    </div>
</div>
</div>

@endsection

@push('scripts')

@endpush
