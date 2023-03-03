@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.News')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')

<form class="set-main-form">
    <div class="input-container">
      {{-- <input type="text" name="name" placeholder="Search..." />
      <a href="#">
        <button class="button"><p>Search</p></button>
      </a> --}}
    </div>
  </form>
<div class="set-carousel-my">
<div>

</div>
</div>
<div id='div-gpt-ad-1538732554188-0' style='height:1px; width:1px;'>
</div>
<div class="clear mb5"></div>
<div id="live_match_info_box_wrap"></div>
<div class="clear"></div>
<div id="breaking_box_wrap"></div>
<div class="clear"></div>
<ul id="bread_crumb_ur" class="bread_crumb_ur">
<li>
<a href="#">مرکزی صفحہ</a>
</li>
<li>
<i class="fa fa-angle-double-left"></i>
</li>
<li>
<a href="#">شوبز</a>
</li>
<li>
<i class="fa fa-angle-double-left"></i>
</li>
<li>
<a href="#">{{ $news->news_title}}</a>
</li>
</ul>
<div id="main_content">
<div class="main_bar fl">
<div class="news_article">
  <h1 class="fs24 lh48 urdu ar rtl">{{ $news->news_title}}</h1>
  <p class="art_info_bar rtl ar urdu fs16">
    <span>
      <i class="fa fa-calendar-o ml5"></i> {{ $news->created_at}}</span>
    </span>
    <span class="arial mr10">
      {{-- <i class="fa fa-clock-o"></i> 17:59 </span> --}}
  </p>
  <div class="clear mb10"></div>
  <div class="ac">
    <picture>
      <img width="800" height="550" class="main_image" src="{{ Storage::url($news->image) }}" alt="ہمارے لیے دعا کریں عمران اشرف کی طلاق کے بعد مداحوں سے درخواست ">
    </picture>
  </div>
  <div class="detail_txt urdu fs17 lh34 aj rtl">
    <div class="txt_banner">
      <div class="ac mb15 mt15">
        <div id='gpt-center-banner' style="text-align:center;">
        </div>
      </div><p>{!! $news->news_description !!}</p></div>
    <p class="hide_desk ac urdu rtl fs18 lh36" style="color: #666;">(جاری ہے)</p>
    <div id="teads"></div>
    <div class="clear"></div>
    <div align="center">
      <div id='div-gpt-ad-outstream'>

      </div>
      <div id='div-gpt-ad-1x1' align='center'>

      </div>
    </div>
    <div class="clear"></div>
    <div id="eng_mob_ad_wrap">
      <div align="center" style="text-align:center; padding-top:40px;padding-bottom:40px; width:100; background-color: #f7f7f7;">
        <div id='gpt-middle-banner' style='margin:0 auto;'>
        </div>
      </div>
    </div>
    <p style="margin-top:0px;">
    <p style="margin-top: 5px;"></p>
    </div>
  <div class="clear"></div>
  <div class="clear"></div>
  <div class="clear"></div>
  <div align="center" style="text-align:center; padding-top:0px;padding-bottom:3px; margin:0 auto;">
    <div style="margin:0 auto;" id="rmpPlayer"></div>
    <div id='second_outstream'>
    </div>
  </div>
  <div class="clear"></div>
  <div class="clear"></div>
  <div class="list_box">
    <h3 class="urdu fs24 lh48 txt_green ar rtl">مزید متعلقہ خبریں پڑھئیے‎ :</h3>

    <div class="clear"></div>
    @foreach ($News as $item)
    <div class="box_item">
        <a href="{{ route('main-site.pages.news-details', $item->id) }}">
          <img class="lazyload" src="{{ Storage::url($item->image) }}"  width="70" height="70" alt="" />
          <h4 class="fs18 lh36 txt_blue urdu ar rtl">{{$item->news_title}}</h4>
          <p class="fs15 lh30 urdu ar rtl"> {{$item->news_title}} ... مزید</p>
        </a>
        <div class="clear"></div>
      </div>
    @endforeach

  </div>
  <div class="social_sharer">
    <a onclick="share_this('facebook')" class="facebook nafees" data-url="#" data-title="ہمارے لیے دعا کریں عمران اشرف کی طلاق کے بعد مداحوں سے درخواست زندگی کا سب سے بڑا مقصد بیٹے کی پرورش ہے،دن میں 25بار بیٹے سے پوچھتا ہوں کہیں چوٹ تو نہیں لگی، اداکار - اُردو پوائنٹ شوبز" href="javascript:void(0)">
      <i class="fa fa-facebook-square"></i>
      <span>Facebook</span>
    </a>
    <a onclick="share_this('twitter')" class="twitter nafees" data-url="#" data-title="ہمارے لیے دعا کریں عمران اشرف کی طلاق کے بعد مداحوں سے درخواست زندگی کا سب سے بڑا مقصد بیٹے کی پرورش ہے،دن میں 25بار بیٹے سے پوچھتا ہوں کہیں چوٹ تو نہیں لگی، اداکار - اُردو پوائنٹ شوبز" href="javascript:void(0)">
      <i class="fa fa-twitter-square"></i>
      <span>Twitter</span>
    </a>
    <a onclick="share_this('google-plus')" class="google-plus nafees" data-url="#" data-title="ہمارے لیے دعا کریں عمران اشرف کی طلاق کے بعد مداحوں سے درخواست زندگی کا سب سے بڑا مقصد بیٹے کی پرورش ہے،دن میں 25بار بیٹے سے پوچھتا ہوں کہیں چوٹ تو نہیں لگی، اداکار - اُردو پوائنٹ شوبز" href="javascript:void(0)">
      <i class="fa fa-google-plus-square"></i>
      <span>Google +</span>
    </a>
    <a class="whatsapp nafees" target="_blank" href="#">
      <i class="fa fa-whatsapp"></i>
      <span>Share on Whatsapp</span>
    </a>
  </div>
  <style type="text/css">
    .price_box_wrap_biz {
      width: 100%;
      float: left;
      box-sizing: border-box;
      padding: 5px;
    }

    .price_box_biz {
      width: 16.5%;
      float: left;
      box-sizing: border-box;
      padding: 5px;
      text-align: center;
      border: 1px solid #ccc;
    }

    .price_box_biz p {
      font-size: 12px;
    }

    @media(max-width:680px) {
      .price_box_biz {
        width: 33% !important;
      }
    }

    @media(max-width:300px) {
      .price_box_biz {
        width: 50% !important;
      }
    }
  </style>
  <div class="clear mb10"></div>
  <div class="clear mb10"></div>
  <div class="ac fs13 lh26 txt_gray urdu"> وقت اشاعت : <span class="arial fs11">{{ $news->created_at}}</span>
  </div>
  <div class="clear"></div>
  <div id="showbiz_top_news_box"></div>
  <div class="clear"></div>
  <div class="bg_gray pad10 mt10 mb10">
    <h3 class="txt_green fs16 lh28 urdu ar rtl">متعلقہ عنوان : </h3>
    <div class="tagcloud rtl ar urdu">
      <a href="#" title="Showbiz">شوبز</a>
      <a href="#" title="marriage">شادی</a>
      <a href="#" title="divorce">طلاق</a>
    </div>
  </div>
  <div class="clear mb20"></div>
</div>
<div class="clear mb20"></div>
</div>
<div class="side_bar fr">

<!-- JOB TYPE -->

<!-- Posted by -->

<div id="desk_side_first" class="">
  <div align="center" style="text-align:center; padding-bottom:5px; width:300px; margin:0 auto;">
    <div id='Side1-banner'>
    </div>
  </div>
</div>
<div class="clear mb15"></div>
<div class="widget">
  <div class="side_menu_item_wrap">
    <a class="side_menu_item urdu fs17 lh34" title="Lollywood" href="#">لالی ووڈ</a>
    <a class="side_menu_item urdu fs17 lh34" title="Bollywood" href="#">بالی ووڈ</a>
    <a class="side_menu_item urdu fs17 lh34" title="Hollywood" href="#">ہالی ووڈ</a>
    <a class="side_menu_item urdu fs17 lh34" title="Theater" href="#">تھیٹر</a>
    <a class="side_menu_item urdu fs17 lh34" title="Television" href="#">ٹیلی ویژن</a>
    <a class="side_menu_item urdu fs17 lh34" title="Music" href="#">موسیقی - میوزک</a>
    <a class="side_menu_item urdu fs17 lh34" title="Radio" href="#">ریڈیو</a>
    <a class="side_menu_item urdu fs17 lh34" title="Fashion" href="#">فیشن</a>
    <a class="side_menu_item urdu fs17 lh34" title="Other" href="#">متفرق</a>
    <a class="side_menu_item urdu fs17 lh34" title="Movies" href="#">فلمز</a>
    <a class="side_menu_item urdu fs17 lh34" title="Gallery" href="#">خبریں</a>
    <a class="side_menu_item urdu fs17 lh34" title="Videos" href="#">مضامین</a>
    <a class="side_menu_item urdu fs17 lh34" title="Gallery" href="#">تصاویر</a>
    <a class="side_menu_item urdu fs17 lh34" title="Videos" href="#">ویڈیوز</a>
    <a class="side_menu_item urdu fs17 lh34" title="Showbiz Programs" href="#">پروگرامز</a>
    <a class="side_menu_item urdu fs17 lh34" title="Showbiz Programs" href="#">ستارے</a>
  </div>
</div>
<div class="clear mb15"></div>

<div class="clear mb15"></div>
<div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
  <div id='Side2' style='margin: 0 auto;'>
  </div>
</div>
<div class="clear mb15"></div>
<div class="widget">
  <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">تازہ ترین شوبز کی خبریں</h3>
  <ul class="side_news_list">
    @foreach ($News as $item)
    <li>
      <a href="{{ route('main-site.pages.news-details', $item->id) }}">
        <div class="list-no-img">
          <i class="fa fa-picture-o"></i>
        </div>
        <p class="urdu fs16 lh32 ar rtl">{{$item->news_title}} </p>
      </a>
    </li>
@endforeach
  </ul>
</div>
<div class="clear mb15"></div>
<div id="desk_side_last" class="">
  <div align="center" style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0 auto;">
    <div id="Side3"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="clear mb15"></div>
</div>
<div class="clear mb20"></div>
<div class="clear"></div>
</div>
<div class="clear"></div>








@endsection

@push('scripts')

@endpush
