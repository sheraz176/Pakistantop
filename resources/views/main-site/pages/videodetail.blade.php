@extends('main-site.layouts.app')

@section('title')
    <title> | Videos</title>

    <style>
        .article iframe{
            width: 100% !important;
            height: 400px !important;
        }
        </style>
@endsection
@section('content')
<div class="page-header small-page-header">
    <div class="wrapper">
        <div class="breadcrumbs">

            {{-- <a href="">{{ $video->title }}</a> --}}
        </div>
    </div>
</div>

<div class="page-text">
    <div class="wrapper">

        <div class="article">
            {{-- <img class="main-photo" src="" alt="" draggable="false" style="height:550px;width:997px; ">

            {{$video->video_url}}

            <div class="date">{{ $video->created_at }}</div> --}}


            {!!$video->video_url!!}






                <div class="info" style="font-weight:800;background-color:rgb(10, 248, 10);color:white;padding:20px">
                    <p>{{ $video->created_at }}</p>
                    <span>{{ $video->title }}</span>
                </div>


        </div>
    </div>
</div>

 <!-- Section 4 Videos Box Start -->
 <div class="home_box videos_box"> <a title="Videos" href="#">
    <h3 class="urdu">متعلقہ نیوز چینلز</h3>
</a>
@foreach ($Videos as $key => $video)
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
<div class="relc_box vid_box">

    <a href="{{ route('video.detail', $video->id) }}"><img width="33" height="33" class="play_icon" src=" {{asset('pakistantop/assets/images/play_icon_video.webp')}}"><img width="235" height="155" class="lazyload" src="{{ $thumbURL }}" alt="">
        <p class="fs16 lh32 urdu ar rtl">{{ $video->title }}</p>
    </a>
    <div class="clear"></div>
</div>
@endforeach

<div class="clear mb10"></div>
<ul class="box_menu urdu">
    <li><a title="Videos" href="#">ویڈیوز</a></li>
    <li><a title="Funny Videos" href="#">مزاحیہ </a></li>
    <li><a title="Khwabon Ki Tabeer Videos" href="#">خوابوں کی تعبیر</a></li>
    <li><a title="Islamic Videos" href="#">اسلام</a></li>
    <li><a title="Urdu Stories Videos" href="videos/urdu-stories.html">اردو کہانیاں</a></li>
    <li><a title="Showbiz Videos" href="#">شوبز</a></li>
    <li><a title="Interviews Videos" href="#">انٹرویوز</a></li>
    <li><a title="Sports Videos" href="#">کھیل</a></li>
    <li><a title="Political Videos" href="#">سیاسی</a></li>
</ul>
<div class="clear mb10"></div>
</div>
<div class="clear"></div>
<!-- Section 4 Videos Box End -->











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
