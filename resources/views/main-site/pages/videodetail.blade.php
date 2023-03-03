@extends('main-site.layouts.app')

@section('title')
    <title> | Videos</title>
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






                <div class="info">
                    <p>{{ $video->created_at }}</p>
                    <span>{{ $video->title }}</span>
                </div>


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
