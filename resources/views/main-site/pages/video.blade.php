@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Video')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')
<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.Video')}}</a>
        </div>
        <h2 class="white">{{__('lang.Video')}}</h2>
        <p class="white">{{__('lang.Information in video format about current events of the religious world in the city of Almaty')}}</p>
        <img src="images/video-img.png" alt="" draggable="false">
    </div>
</div>

    <div class="news no-bg">
        <div class="wrapper">
            <div class="carousel">
                @foreach ($videos as $key => $video)
                    <a class="element modal-link" data-url="{{$video->video_url}}" data-class="video">

                        @php

                            $embedCode = $video->video_url;

                            preg_match('/src="([^"]+)"/', $embedCode, $match);

                            // Extract video url from embed code
                            $videoURL = $match[1];
                            $urlArr = explode('/', $videoURL);
                            $urlArrNum = count($urlArr);

                            // YouTube video ID
                            $youtubeVideoId = $urlArr[$urlArrNum - 1];

                            // Generate youtube thumbnail url
                            $thumbURL = 'http://img.youtube.com/vi/' . $youtubeVideoId . '/0.jpg';

                        @endphp
                        <div class="photo">
                            <img src="{{ $thumbURL }}" width="250">

                        </div>




                        <div class="info">
                            <p>{{ $video->created_at }}</p>
                            <span>{{ $video->title }}</span>
                        </div>
                    </a>


                @endforeach



            </div>
            <div class="pagination">
                {{ $videos->links('main-site.pages.partials.news-pagination') }}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
   <script>
    $(document).ready(function() {
    $(document).on('click', '.modal-link', openWindow);
    $(document).on('click', '.modal-window', closeWindow);
    $('.modal').click(function(e) {
        if (!$(e.target).hasClass('close'))
            e.stopPropagation();
    });
});

function openWindow() {
    let $this = $(this);
    let modalWrapper = $('.modal-wrapper').html('');
    $('.hover_').fadeIn(300);
    $('.modal').hide().attr('class', 'modal');
    $('.modal-window').fadeIn(300);
    if ($(document).height() > $(window).height()) {
        $('body').addClass('no-scroll');
    }


            modalWrapper.html($this.data('url'));
            $('.modal').fadeIn(300).addClass($this.data('class'));
            modalWrapper.find('form').each(function() {
                if (!$(this).hasClass('no-ajax'))
                    $(this).on('submit', submitForm);
            });
            $('.close').on('click', closeWindow);
            $('.modal-link').unbind().bind('click', openWindow);


}

function closeWindow() {
    $('.modal').hide();
    $('.modal-window').fadeOut(300);
    $('body').removeClass('no-scroll');
}
   </script>



@endpush
