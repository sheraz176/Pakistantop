@extends('main-site.layouts.app')

@section('title')
    <title>{{ __('lang.index') }}</title>
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css">
<link href="{{asset('mag/vanilla-calendar.min.css')}}" rel="stylesheet">
<style>
    @media(max-width:800px) {
        #FooterFixed {
            position: fixed;
            bottom: 0px;
            z-index: 9999999 !important;
            background: #fff !important;
        }
    }
</style>
<div id='FooterFixed' align="center" style="text-align: center;padding-top: 0px;padding-bottom: 0px;margin: 0px auto;width: 100%;">
</div>


      <link rel="stylesheet" href="mag/css/slick-theme.css">
      <link rel="stylesheet" href="mag/css/swiper.min.css">
       <link rel="stylesheet" href="mag/css/owl.carousel.min.css">


@endpush

@section('content')

<form  action="{{route('main-site.home.search')}}">
    @csrf
    <div class="set-main-container-flex">

        <div class="set-inline-here">
            <input type="text" name="category" placeholder="Search..." />
        </div>
        <div class="set-inline-here">
            <select  name="category">
                <option>Select Category</option>
                <option>اخبار</option>
                <option>پاکستان</option>
                <option>انٹرنیشنل</option>
                <option>شاعری</option>
                <option>بچے</option>
                <option>خواتین</option>
                <option>پکوان</option>
                <option>شوبز</option>
                <option>پاکستان</option>
                <option>انٹرنیشنل</option>
                <option>شاعری</option>
                <option>بچے</option>
                <option>آپکا دن</option>
                <option>کھیل</option>
                <option>اسلام</option>
                <option>صحت</option>
                <option>کتابیں</option>
                <option>آپکا دن</option>
                <option>کھیل</option>
                <option>اسلام</option>
                <option>صحت</option>
                <option>کتابیں</option>
                <option>ٹیکنالوجی</a></option>
            </select>
        </div>
        <div class="set-inline-here">
            <button type="submit">Search</button>
        </div>
    </div>
</form>

<div class="swiper-slider-area" style="margin-top: -7%;">
    <div class="swiper-slider-two">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/02/13/13/11/oldtimer-1197800_960_720.jpg)">
                    <div class="swiper-slider-text">
                        <h2>Innovation Through</h2>
                        <p>We create premium designs, technology, mobile & digital, ecommerce campaigns.</p>
                        <div class="btns">
                            <a href="#" class="theme-btn" tabindex="-1">Explore work</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/10/22/20/34/wines-1761613_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2015/11/19/21/10/glasses-1052010_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/01/05/13/58/apple-1122537_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2017/02/02/14/04/grapes-2032838_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/01/02/02/03/orange-1117645_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/06/29/17/14/drink-1487304_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2020/05/16/17/23/cycling-5178398_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2014/02/08/17/32/cricket-262180_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2015/08/09/13/30/kingfisher-881594_960_720.jpg)">

                </div>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/02/13/13/11/oldtimer-1197800_960_720.jpg)">


                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/10/22/20/34/wines-1761613_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2015/11/19/21/10/glasses-1052010_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/01/05/13/58/apple-1122537_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2017/02/02/14/04/grapes-2032838_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/01/02/02/03/orange-1117645_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2016/06/29/17/14/drink-1487304_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2020/05/16/17/23/cycling-5178398_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2014/02/08/17/32/cricket-262180_960_720.jpg)">

                </div>
                <div class="swiper-slide swiper-overlay" style="background-image:url(https://cdn.pixabay.com/photo/2015/08/09/13/30/kingfisher-881594_960_720.jpg)">

                </div>
            </div>
        </div>
    </div>
</div>

<div id="main_content">
    <div class="clear"></div>






    <!-- END CAROUSEL -->
    <div class="clear"></div>
    <div class="main_bar fl">
        <div class="aha_wrap">
            <!--<p class="ahal_left urdu fs15 lh30 txt_red">منگل،10جمادی الثانی1444ھ،3جنوری2023ء</p>-->
            <p class="ahal_right urdu fs14 lh28"> <a class="txt_blue" href="ayat-of-the-day.html">آیت کریمہ</a> <span class="ml5 mr5">-</span> <a class="txt_blue" href="hadith-of-the-day.html">حدیث نبویﷺ</a> <span class="ml5 mr5">-</span> <a class="txt_blue" href="quote-of-the-day.html">اقوال زریں</a> </p>
        </div>
        <div class="clear"></div>
        <style>
            @media only screen and (min-width: 800px) {
                .header_fixed_top_home {
                    position: -webkit-sticky;
                    /* Safari */
                    position: sticky;
                    top: 3px;
                    left: 0;
                    width: 100%;
                    z-index: 10;
                }
            }

            @media only screen and (max-width: 800px) {
                .header_fixed_top_home {
                    position: -webkit-sticky;
                    /* Safari */
                    position: sticky;
                    top: 55px;
                    left: 0;
                    width: 100%;
                    z-index: 10;
                }
            }

            @media only screen and (min-width: 800px) {
                .sticky-top-home-show {
                    align: left;
                    padding-left: 20px;
                    auto;
                    width: auto;
                }
            }

            @media only screen and (max-width: 800px) {
                .sticky-top-home-show {
                    margin: auto;
                    text-align: center;
                    padding: 0px;
                }
            }
        </style>
        <!-- SECTION 1 START  -->
        <div class="top_news_box">
            @foreach ($Newsone as $key => $news)
            <a class="main_news" href="{{ route('main-site.pages.news-details',[$news->id,$news->slug]) }}"> <img width="450" height="300" src="{{ Storage::url($news->image) }}" alt="اقتصادی روڈ میپ سے معیشت بحال ہو گی اور عوام کو ریلیف ملے گا،وزیراعظم">
                <h3 class="urdu fs22 lh44 ar rtl pad5 txt_white"> {{ $news->news_title }}</h3>
                <p class="urdu fs15 lh30 ar rtl pad5 txt_white"> {{ $news->news_title }}</p>
            </a>
            @endforeach
            <!-- Small News Section  -->
            @foreach ($News as $key => $news)
            <a class="small_news" href="{{ route('main-site.pages.news-details',[$news->id,$news->slug]) }}"> <img width="174" height="94" class="lazyload" src="{{ Storage::url($news->image) }}">
                <p class="urdu fs14 lh28 ar rtl">{{ $news->news_title }}</p>
            </a>
            @endforeach
            <div class="clear"></div>
            <div class="ac mt10 mb10"> <a class="btn_live_news urdu" title="Latest News Update In Urdu" href="{{route('main-site.home.search')}}">تازہ ترین خبریں پڑھنے کیلئے یہاں پر کلک کیجئے</a> </div>
            <div class="clear"></div>
            <div align="center" style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0 auto;">
            </div>
            <div class="clear"></div>
            <div class="list_hlaf_block urdu">
                @foreach ($Newslast as $key => $news)
                <a href="{{ route('main-site.pages.news-details',[$news->id,$news->slug]) }}"><img alt="image" width="70" height="70" class="lazyload" src="{{ Storage::url($news->image) }}">
                    <p>{{ $news->news_title }}</p>
                </a>
                @endforeach

            </div>
            <div class="clear"></div>
        </div>
        <!-- Section 1 End -->

        <!-- SECTION START  -->
        <div class="clear"></div>
        <!-- START  -->
        <div class="side_menu_item_wrap mob_spl_links hide_desk mb10 mt10"> <a class="side_menu_item urdu fs17 lh34" title="" href="horoscope/index.html">آپکا دن کیسا گزرے گا</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">کرنسی ریٹ </a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">بچوں کے نام <a class="side_menu_item urdu fs17 lh34" title="" href="#">ڈکشنری </a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">پرائز بانڈز</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">ٹی وی چینلز</a> </div>
        <!-- END -->
        <div class="clear"></div>

        <div class="home_box sports_box"> <a title="Sports" href="sports/index.html">
            <h3 class="urdu">اخبار</h3>
            @foreach ($Regulations as $key => $Regulation)
         <a href="{{ route('news_paper_detail', [$Regulation->id,$Regulation->slug]) }}" class="double_big_item"><img width="400" height="200" class="full mb10 lazyload" src="{{ Storage::url($Regulation->file) }}" alt="">
            <p class="fs16 lh32 urdu ar rtl"> {{ $Regulation->title }}  </p>
        </a>

           @endforeach

        <!-- Section 3 Half Block End -->
        <div class="clear mb10"></div>

        <div class="clear mb10"></div>
    </div>

        <!-- Section 4 Videos Box Start -->
        <div class="home_box videos_box"> <a title="Videos" href="#">
                <h3 class="urdu">نیوز چینلز
                </h3>
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

                <a href="{{ route('video.detail', $video->id) }}"><img width="33" height="33" class="play_icon" src="./assets/images/play_icon_video.webp"><img width="235" height="155" class="lazyload" src="{{ $thumbURL }}" alt="">
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

        <!-- Section 5 Games and Player Start -->
        <div class="home_box sports_box"> <a title="Sports" href="sports/index.html">
                <h3 class="urdu">کھیل اور کھلاڑی</h3>
                @foreach ($playing as $key => $item)
             <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}" class="double_big_item"><img width="400" height="200" class="full mb10 lazyload" src="{{ Storage::url($item->image) }}" alt="">
                <p class="urdu fs16 lh32 ar rtl fl full"> {{ $item->news_title }}  </p>
            </a>
               @endforeach
            <!-- Section 3 Half Block  -->
            <div class="list_hlaf_block urdu">
                @foreach ($playingfour as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                    <p>{{ $item->news_title }}</p>
                </a>
                @endforeach
            </div>
            <!-- Section 3 Half Block End -->
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Sports" href="#">سپورٹس</a></li>
                <li><a title="Sri Lanka tour of India 2023" href="#">بھارت بمقابلہ سری لنکا2022ء </a></li>
                <li><a title="South Africa tour of Australia 2022" href="#">آسٹریلیا بمقابلہ جنوبی افریقہ 2022</a></li>
                <li><a title="Cricket Series" href="#">سیریز</a></li>
                <li><a title="Cricket Leagues" href="#">لیگز</a></li>
                <li><a title="Cricket ICC Team Rankings" href="#">آئی سی سی رینکنگ</a></li>
                <li><a title="Sports News" href="#">خبریں</a></li>
                <li><a title="Sports Articles" href="#">مضامین</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>

        <!-- Section 5 Games and Player End -->

        <!-- Section 6 Business and Transport Start -->
        <div class="home_box business_box"> <a title="Business" href="business/index.html">
                <h3 class="urdu">کاروبار اور تجارت‎</h3>
            </a>
            <ul class="biz_links urdu">
                <li><a title="Open Market Currency Rates In Pakistan" href="#">اوپن مارکیٹ کرنسی ریٹس</a></li>
                <li><a title="Currency Converter" href="#">کرنسی کنورٹر</a></li>
                <li><a title="Prize Bonds" href="#">پرائز بانڈ‎</a></li>
                <li><a title="PSX - Pakistan Stock Exchange" href="#">اسٹاک ایکسجینج</a></li>
                <li><a title="Gold Rate in Pakistan" href="business/gold-rates.html">سونے کی قیمتیں</a></li>
                <li><a title="Silver Rate in Pakistan" href="#">چاندی کی قیمتیں</a></li>
                <li><a title="Petroleum Prices In Pakistan" href="#">پٹرول کی قیمتیں</a></li>
                <li><a title="CNG Prices In Pakistan" href="#">سی این جی کی قیمتیں</a></li>
                <li><a title="Live Crypto Currency Updates" href="#">کرپٹو کرنسی</a></li>
                <li><a title="Foreign Exchange Rates In Pakistan" href="#">بین الاقوامی کرنسی ریٹس</a></li>
            </ul>
            <div class="clear mb10"></div>
            <div class="list_hlaf_block urdu">

                @foreach ($business as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p>{{ $item->news_title }} </p>
                </a>
               @endforeach
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="ac mt10 mb10">
            <div align="center" style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0 auto;">
                <div id="onDemand1" width="100%"> </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Section 6 Business and Transport END -->

        <!-- Section 7 Mobile Prices Start-->
        <div class="home_box mobile_box"> <a title="Mobile Phones Price in Pakistan" href="#">
                <h3 class="urdu">موبائل فونز کی قیمتیں</h3>
            </a>
            @foreach ($mobile as $key => $item)
            <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}" class="mob_box"> <img alt="Oppo A58x Price In Pakistan" width="80" height="120" class="lazyload" src="{{ Storage::url($item->image) }}" />
                <div class="mob_cnt">
                    <p class="fl full bsbb ac fs14 txt_blue">{{ $item->news_title }}</p>
                    {{-- <p class="fl full bsbb ac fs14 txt_suc">Expected Price Rs. 39,999</p> --}}
                </div>
            </a>
         @endforeach

            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Mobile Phones Prices" href="mobile/index.html">موبائل فونز</a></li>
                <li><a title="Samsung Mobiles Prices In Pakistan" href="#">سامسنگ</a></li>
                <li><a title="Qmobile Prices In Pakistan" href="#">کیو موبائل</a></li>
                <li><a title="Huawei Mobiles Prices In Pakistan" href="#">ہواوے</a></li>
                <li><a title="Nokia Mobiles Prices In Pakistan" href="#">نوکیا</a></li>
                <li><a title="Apple Mobiles Prices In Pakistan" href="#">ایپل</a></li>
                <li><a title="oppo Mobiles Prices In Pakistan" href="#">اوپو</a></li>
                <li><a title="HTC Prices In Pakistan" href="#">ایچ ٹی سی</a></li>
                <li><a title="LG Mobiles Prices In Pakistan" href="#">ایل جی</a></li>
                <li><a title="Mobile Phone Brands" href="#">مزید برانڈز</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
         <!-- Section 7 Mobile Prices END-->
     <!-- Section 19 Dictionary and Word Search Start -->
     <div class="home_box dictionary_box">
        <h3 class="urdu">                 کرنسی کنورٹر
        </h3>
        <div class="search_dic">
            <h4 class="dic_head ac txt_white pad10 lh24 mb15 urdu">                  کرنسی کنورٹر
                <a class="ar txt_white fr arial fs12" onClick="clear_field()" style="cursor: pointer;">Clear Search</a></h4>
            {{-- <form id="formSearch" name="formSearch" method="post" action="#" onSubmit="return emptyValues()">
                <input class="dic_search_bar main_dic" type="text" name="dic_search" id="dic_search" value="" placeholder="تلاش کیجئے" onKeyUp="get_autocomplete(this.value)" />
                <select class="dic_search_lang urdu ar rtl" name="lang_type" id="lang_type" onChange="keyboad_dic(this.value)">
                    <option selected value="english">انگلش</option>
                    <option value="roman_urdu">رومن اردو</option>
                    <option value="urdu">اردو</option>
                </select>
                <input type="submit" name="Submit" value="تلاش کیجئے" class="txt_white mt10 mb10 full bsbb fl pad2 dic_btn urdu" />
            </form> --}}

            <div class="">

		<div class="main">

			<div class="form-group curncy-form">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text txt_white">Amount to Convert :</span>
                    </div>
                    <input type="text"
					class="form-control searchBox"
					placeholder="0.00" id="oamount">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text txt_white">From</span>
                    </div>
                    <select class="form-control from" id="sel1">
                        <option value="">Select One …</option>
                        <option value="USD">USD</option>
                        <option value="AED">AED</option>
                        <option value="ARS">ARS</option>
                        <option value="AUD">AUD</option>
                        <option value="BGN">BGN</option>
                        <option value="BRL">BRL</option>
                        <option value="BSD">BSD</option>
                        <option value="CAD">CAD</option>
                        <option value="CHF">CHF</option>
                        <option value="CLP">CLP</option>
                        <option value="CNY">CNY</option>
                        <option value="COP">COP</option>
                        <option value="CZK">CZK</option>
                        <option value="DKK">DKK</option>
                        <option value="DOP">DOP</option>
                        <option value="EGP">EGP</option>
                        <option value="EUR">EUR</option>
                        <option value="FJD">FJD</option>
                        <option value="GBP">GBP</option>
                        <option value="GTQ">GTQ</option>
                        <option value="HKD">HKD</option>
                        <option value="HRK">HRK</option>
                        <option value="HUF">HUF</option>
                        <option value="IDR">IDR</option>
                        <option value="ILS">ILS</option>
                        <option value="INR">INR</option>
                        <option value="ISK">ISK</option>
                        <option value="JPY">JPY</option>
                        <option value="KRW">KRW</option>
                        <option value="KZT">KZT</option>
                        <option value="MVR">MVR</option>
                        <option value="MXN">MXN</option>
                        <option value="MYR">MYR</option>
                        <option value="NOK">NOK</option>
                        <option value="NZD">NZD</option>
                        <option value="PAB">PAB</option>
                        <option value="PEN">PEN</option>
                        <option value="PHP">PHP</option>
                        <option value="PKR">PKR</option>
                        <option value="PLN">PLN</option>
                        <option value="PYG">PYG</option>
                        <option value="RON">RON</option>
                        <option value="RUB">RUB</option>
                        <option value="SAR">SAR</option>
                        <option value="SEK">SEK</option>
                        <option value="SGD">SGD</option>
                        <option value="THB">THB</option>
                        <option value="TRY">TRY</option>
                        <option value="TWD">TWD</option>
                        <option value="UAH">UAH</option>
                        <option value="UYU">UYU</option>
                        <option value="ZAR">ZAR</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text txt_white">To</span>
                    </div>
                    <select class="form-control to" id="sel2">
                        <option value="">Select One …</option>
                        <option value="USD">USD</option>
                        <option value="AED">AED</option>
                        <option value="ARS">ARS</option>
                        <option value="AUD">AUD</option>
                        <option value="BGN">BGN</option>
                        <option value="BRL">BRL</option>
                        <option value="BSD">BSD</option>
                        <option value="CAD">CAD</option>
                        <option value="CHF">CHF</option>
                        <option value="CLP">CLP</option>
                        <option value="CNY">CNY</option>
                        <option value="COP">COP</option>
                        <option value="CZK">CZK</option>
                        <option value="DKK">DKK</option>
                        <option value="DOP">DOP</option>
                        <option value="EGP">EGP</option>
                        <option value="EUR">EUR</option>
                        <option value="FJD">FJD</option>
                        <option value="GBP">GBP</option>
                        <option value="GTQ">GTQ</option>
                        <option value="HKD">HKD</option>
                        <option value="HRK">HRK</option>
                        <option value="HUF">HUF</option>
                        <option value="IDR">IDR</option>
                        <option value="ILS">ILS</option>
                        <option value="INR">INR</option>
                        <option value="ISK">ISK</option>
                        <option value="JPY">JPY</option>
                        <option value="KRW">KRW</option>
                        <option value="KZT">KZT</option>
                        <option value="MVR">MVR</option>
                        <option value="MXN">MXN</option>
                        <option value="MYR">MYR</option>
                        <option value="NOK">NOK</option>
                        <option value="NZD">NZD</option>
                        <option value="PAB">PAB</option>
                        <option value="PEN">PEN</option>
                        <option value="PHP">PHP</option>
                        <option value="PKR">PKR</option>
                        <option value="PLN">PLN</option>
                        <option value="PYG">PYG</option>
                        <option value="RON">RON</option>
                        <option value="RUB">RUB</option>
                        <option value="SAR">SAR</option>
                        <option value="SEK">SEK</option>
                        <option value="SGD">SGD</option>
                        <option value="THB">THB</option>
                        <option value="TRY">TRY</option>
                        <option value="TWD">TWD</option>
                        <option value="UAH">UAH</option>
                        <option value="UYU">UYU</option>
                        <option value="ZAR">ZAR</option>
                    </select>
                </div>
			</div>
			<div class="text-center">
				<!-- convert button -->
				<button class="btn btn-primary convert m-2 txt_white mt10 mb10 full bsbb fl pad2 dic_btn urdu"
					type="submit">
					Convert
				</button>

				<!-- reset button -->
				<button class="btn btn-primary m-2 reset txt_white mt10 mb10 full bsbb fl pad2 dic_btn urdu"
					onclick="clearVal()">
					Reset
				</button>
			</div>

		</div>
        <div style="clear: both"></div>
        <div id="finalAmount" style="">

			<!-- Display the converted amount -->
			Converted Amount :
				<span class="finalValue"
					style="color:white;">
				</span>

		</div>


        </div>

            <div class="clear"></div>
        </div>
        <div class="clear mb10"></div>
        {{-- <ul class="box_menu urdu">
            <li><a title="Dictionary" href="#">ڈکشنری</a></li>
            <li><a title="English to Urdu Dictionary" href="#">انگلش سے اردو ڈکشنری</a></li>
            <li><a title="Urdu to English Dictionary" href="#">اردو سے انگلش ڈکشنری</a></li>
            <li><a title="Roman Urdu to English Dictionary" href="#">رومن اردو سے انگلش ڈکشنری</a></li>
        </ul> --}}
        <div class="clear mb10"></div>
    </div>
    <div class="clear"></div>
    <!-- Section 19 Dictionary and Word Search END -->


         <!-- Section 8 Poetry and Poem Start -->
        {{-- <div class="home_box poetry_box"> <a title="Poetry" href="#">
                <h3 class="urdu">شعر و شاعری</h3>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <a class="mpitem urdu" title="Shoaib Bin Aziz Shayari" href="#"> <img width="40" height="40" class="lazyload" src="assets/images/user.jpg">
                <p class="txt_red fs14 lh28">شعیب بن عزیز</p>
            </a>
            <div class="clear mb10"></div>
            <a title="Dil Main Utre Gi Tu Poche Gi by Shehr yar" class="poem_box " href="#">
                <p class="urdu fs15 lh30 rtl ac">دل میں اترے گی تو پوچھے گی جنوں کتنا ہے</p>
                <p class="arial fs12 lh22 ltr ac en_title">Dil Main Utre Gi Tu Poche Gi</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Shehr yar)</span> <span class="urdu fs14 lh28 txt_blue">شہر یار</span> </p>
            </a>
            <a title="Khula Ye Raaz Ki Ye Zindagi Bhi Hoti Hai by Haseeb Soz" class="poem_box " href="#">
                <p class="urdu fs15 lh30 rtl ac">کھلا یہ راز کہ یہ زندگی بھی ہوتی ہے</p>
                <p class="arial fs12 lh22 ltr ac en_title">Khula Ye Raaz Ki Ye Zindagi Bhi Hoti Hai</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Haseeb Soz)</span> <span class="urdu fs14 lh28 txt_blue">حسیب سوز</span> </p>
            </a>
            <a title="Ashkon Mein Aaj Phir Se Nahae Hue Hain Hum by kaashif shakiil" class="poem_box " href="#">
                <p class="urdu fs15 lh30 rtl ac">اشکوں میں آج پھر سے نہائے ہوئے ہیں ہم</p>
                <p class="arial fs12 lh22 ltr ac en_title">Ashkon Mein Aaj Phir Se Nahae Hue Hain Hum</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(kaashif shakiil)</span> <span class="urdu fs14 lh28 txt_blue">کاشف شکیل</span> </p>
            </a>
            <a title="Barzakh by Sheba Taraz" class="poem_box " href="#">
                <p class="urdu fs15 lh30 rtl ac">برزخ</p>
                <p class="arial fs12 lh22 ltr ac en_title">Barzakh</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Sheba Taraz)</span> <span class="urdu fs14 lh28 txt_blue">شبہ طراز</span> </p>
            </a>
            <a title="Martaba Mashuq Ka Aashiq Se Baala-dast Hai by Munawar Khan Ghafil" class="poem_box  hide_mob " href="#">
                <p class="urdu fs15 lh30 rtl ac">مرتبہ معشوق کا عاشق سے بالا دست ہے (ردیف .. ر)</p>
                <p class="arial fs12 lh22 ltr ac en_title">Martaba Mashuq Ka Aashiq Se Baala-dast Hai</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Munawar Khan Ghafil)</span> <span class="urdu fs14 lh28 txt_blue">منور خان غافل</span> </p>
            </a>
            <a title="Nikhaton Mein Naghmagi Hai Rang Mein Jhankar Hai by Peer Akram" class="poem_box  hide_mob " href="#">
                <p class="urdu fs15 lh30 rtl ac">نکہتوں میں نغمگی ہے رنگ میں جھنکار ہے</p>
                <p class="arial fs12 lh22 ltr ac en_title">Nikhaton Mein Naghmagi Hai Rang Mein Jhankar Hai</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Peer Akram)</span> <span class="urdu fs14 lh28 txt_blue">پیر اکرم</span> </p>
            </a>
            <a title="Dil Be Tab O Taab Ho Gaya Hai by Qaiser Ul Jafri" class="poem_box  hide_mob " href="#">
                <p class="urdu fs15 lh30 rtl ac">دل بے تب و تاب ہو گیا ہے </p>
                <p class="arial fs12 lh22 ltr ac en_title">Dil Be Tab O Taab Ho Gaya Hai</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Qaiser Ul Jafri)</span> <span class="urdu fs14 lh28 txt_blue">قیصرالجعفری</span> </p>
            </a>
            <a title="Ye Raat Dhalte Dhalte Rakh Gai Jawab Ke Liye by Anjum Irfani" class="poem_box  hide_mob " href="#">
                <p class="urdu fs15 lh30 rtl ac">یہ رات ڈھلتے ڈھلتے رکھ گئی جواب کے لیے</p>
                <p class="arial fs12 lh22 ltr ac en_title">Ye Raat Dhalte Dhalte Rakh Gai Jawab Ke Liye</p>
                <p class="al"> <span class="arial fs13 lh22 txt_red en_poet">(Anjum Irfani)</span> <span class="urdu fs14 lh28 txt_blue">انجم عرفانی</span> </p>
            </a>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Poetry" href="#">شاعری</a></li>
                <li><a title="Urdu Poets" href="#">شعراء کی فہرست</a></li>
                <li><a title="New Urdu Poetry" href="#">نئی شاعری</a></li>
                <li><a title="Famous Poetry" href="#">پسندیدہ شاعری</a></li>
                <li><a title="Urdu Naat" href="#">نعتیں</a></li>
                <li><a title="Funny Poetry" href="#">مزاحیہ شاعری</a></li>
                <li><a title="Urdu Audio Poetry" href="#">آڈیو شاعری</a></li>
                <li><a title="Urdu Video Poetry" href="#">ویڈیو شاعری</a></li>
            </ul>
            <div class="clear"></div>
        </div> --}}
        <div class="clear"></div>
         <!-- Section 8 Poetry and Poem END -->

        <!-- Section 9 Horoscope Start -->
        {{-- <div class="home_box horoscope_box"> <a title="Urdu Horoscope" href="#">
                <h3 class="urdu">آپکا دن - علم نجوم</h3>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Capricorn</span> <span class="urdu star_ur">جدی </span> </div>
                <div class="star_date ac full bsbb fl">Dec 23 - Jan 19</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Aquarius</span> <span class="urdu star_ur">دلو</span> </div>
                <div class="star_date ac full bsbb fl">Jan 20 - Feb 18</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Pisces</span> <span class="urdu star_ur">حوت</span> </div>
                <div class="star_date ac full bsbb fl">Feb 19 - Mar 20</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Aries</span> <span class="urdu star_ur">حمل</span> </div>
                <div class="star_date ac full bsbb fl">Mar 21 - Apr 19</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Taurus</span> <span class="urdu star_ur">ثور</span> </div>
                <div class="star_date ac full bsbb fl">Apr 20 - May 20</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Gemini</span> <span class="urdu star_ur">جوزا</span> </div>
                <div class="star_date ac full bsbb fl">May 21 - Jun 21</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Cancer</span> <span class="urdu star_ur">سرطان</span> </div>
                <div class="star_date ac full bsbb fl">Jun 22 - Jul 22</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Leo</span> <span class="urdu star_ur">اسد</span> </div>
                <div class="star_date ac full bsbb fl">Jul 23 - Aug 22</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Virgo</span> <span class="urdu star_ur">سنبلہ</span> </div>
                <div class="star_date ac full bsbb fl">Aug 23 - Sep 22</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Libra</span> <span class="urdu star_ur">میزان</span> </div>
                <div class="star_date ac full bsbb fl">Sep 23 - Oct 22</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Scorpio</span> <span class="urdu star_ur">عقرب</span> </div>
                <div class="star_date ac full bsbb fl">Oct 23 - Nov 21</div>
            </a>
            <a href="#" class="star_main">
                <div class="star_ribbon"> <span class="arial mr15 star_en">Sagittarius</span> <span class="urdu star_ur">قوس</span> </div>
                <div class="star_date ac full bsbb fl">Nov 22 - Dec 22</div>
            </a>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Urdu Horoscope" href="#">ہوروسکوپ</a></li>
                <li><a title="Today Horoscope in Urdu" href="#">آپکا دن</a></li>
                <li><a title="Weekly Horoscope in Urdu" href="#">آپکا ہفتہ</a></li>
                <li><a title="Monthly Horoscope in Urdu" href="#">آپکا مہینہ</a></li>
                <li><a title="Lucky Stone for your Star Sign & Zodiac sign" href="#">مبارک پتھر</a></li>
                <li><a title="Gemstone Lucky Stone and Birthstones information in Urdu" href="#">آپکے پتھر</a></li>
                <li><a title="Islamic Dream Interpretation Meaning in Urdu & English" href="#">خواب اور انکی تعبیر</a></li>
                <li><a title="Urdu Zaicha by Birth Chart and Date of Birth" href="#">اردو زائچہ</a></li>
                <li><a title="Urdu Articles about Stars, Astrology, Palmistry, Numerology" href="#">مضامین</a></li>
                <li><a title="Stars & Horoscope Videos in Urdu" href="#">ویڈیوز</a></li>
                <li><a title="Love Test Calculator and Lover Meter" href="#">محبت میٹر</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div> --}}
        <div class="clear"></div>
        <!-- Section 9 Horoscope End -->

        <!-- Section 10 Showbiz Start -->
        <div class="home_box showbiz_box"> <a title="Showbiz" href="#">
                <h3 class="urdu">شوبز - فن و فنکار</h3>
            </a>
            @foreach ($shoesa as $key => $item)
            <div class="relc_box">
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="235" height="155" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                    <p class="fs16 lh32 urdu ar rtl">{{ $item->news_title }}</p>
                </a>

                <div class="clear"></div>
            </div>
        @endforeach

            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Showbiz" href="#">شوبز</a></li>
                <li><a title="Lollywood" href="#">لالی ووڈ</a></li>
                <li><a title="Bollywood" href="#">بالی ووڈ</a></li>
                <li><a title="Hollywood" href="#">ہالی ووڈ</a></li>
                <li><a title="Theater" href="#">تھیٹر</a></li>
                <li><a title="Television" href="#">ٹیلی ویژن</a></li>
                <li><a title="Music" href="#">موسیقی - میوزک</a></li>
                <li><a title="Radio" href="#">ریڈیو</a></li>
                <li><a title="Fashion" href="#">فیشن</a></li>
                <li><a title="Miscellaneous" href="#">متفرق</a></li>
                <li><a title="Movies" href="#">فلمز</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>
        <div class="ac mt10 mb10">
            <div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
                <div id="onDemand2" width="100%"> </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Section 10 Showbiz End -->

        <!-- Section 11 Car Prices Start -->
        <div class="home_box cars_box"> <a title="Cars" href="#">
                <h3 class="urdu">گاڑیوں کی قیمتیں‎</h3>
            </a>
            @foreach ($cars as $key => $item)
            <a class="car_item" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"> <img width="180" height="130" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                <p class="ac mb0">{{ $item->news_title }}</p>
            </a>
            @endforeach
            <div class="car_brands mt10">
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/toyota.webp" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/slogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/sslogo.jpg" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/ssslogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/sssslogo.jpg" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/toyota.webp" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/slogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/ssslogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="70" height="70" class="lazyload" src="assets/images/toyota.webp" alt="" border="0"> </a>
            </div>
        </div>
        <!-- Section 11 Car Prices End -->

        <!-- Section 12 Bike Prices Start -->
        <div class="home_box bikes_box"> <a title="Bikes" href="#">
                <h3 class="urdu">موٹرسائیکلوں کی قیمتیں‎‎</h3>
            </a>
            @foreach ($bike as $key => $item)
            <a class="bike_item" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"> <img width="120" height="85" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                <p class="ac mb0">{{ $item->news_title }}</p>
            </a>
           @endforeach
            <div class="bike_brands mt10">
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/logo-honda.jpg" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/blogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/bblogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/bbblogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/bbbblogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/b5logo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/logo-honda.jpg" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/blogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/bblogo.png" alt="" border="0"> </a>
                <a href="#"> <img width="62" height="62" class="lazyload" src="assets/images/logo-honda.jpg" alt="" border="0"> </a>
            </div>
        </div>
        <div id="daily_price_box_wrap"></div>
        <div id="airports_box_wrap"></div>
        <div class="clear"></div>
        <div class="ac mt10 mb10">
            <div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
                <div id="onDemand3" width="100%"> </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="trains_box_wrap"></div>
        <div id="buses_box_wrap"></div>
        <div class="clear"></div>
        <!-- Section 12 Bike Prices END -->

        <!-- Section 13 Live TV Start Start -->
        <div class="home_box live_tv_box"> <a title="Live TV Streaming" href="tv/index.html">
                <h3 class="urdu">لائیو ٹی وی چینلز‎</h3>
            </a>
            <ul class="biz_links urdu">
                <li><a title="Live TV Streaming" href="#">لائیو ٹی وی</a></li>
                <li><a title="Live Streaming of Urdu Sports Channels" href="#">سپورٹس چینل</a></li>
                <li><a title="Live Streaming of Urdu News Channels" href="#">نیوز چینل</a></li>
                <li><a title="Live Streaming of Urdu Entertainment Channels" href="#">انٹرٹینمنٹ چینل</a></li>
                <li><a title="Live Streaming of Urdu Cooking Channels" href="#">کھانا پکانا</a></li>
                <li><a title="Live Streaming of Urdu Religious Channels" href="#">مذہبی چینل</a></li>
                <li><a title="Live Streaming of Urdu Health Channels" href="#">صحت</a></li>
                <li><a title="Live Streaming of Urdu Music Channels" href="#">میوزک</a></li>
                <li><a title="Live Streaming of Urdu Regional Channels" href="#">علاقائی چینل</a></li>
                <li><a title="Live Streaming of Urdu Business Channels" href="#">کاروبار</a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <!-- Section 13 Live TV END -->

        <!-- Section 14 Technology Start -->
        <div class="home_box technology_box"> <a title="Technology" href="technology/index.html">
                <h3 class="urdu">ٹیکنالوجی</h3>
            </a>
            @foreach ($technology as $key => $item)
            <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}" class="double_big_item"><img width="400" height="200" class="full mb10 lazyload" src="{{ Storage::url($item->image) }}" alt="">
                <p class="urdu fs16 lh32 ar rtl fl full">{{ $item->news_title }}</p>
            </a>
            @endforeach
            <div class="list_hlaf_block urdu">
                @foreach ($technologyfour as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                  <p>{{ $item->news_title }}   </p>
                </a>
                @endforeach
            </div>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Technology" href="#">ٹیکنالوجی</a></li>
                <li><a title="Technology Articles" href="#">مضامین</a></li>
                <li><a title="Technology News" href="#">خبریں</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 14 Technology Start -->

        <!-- Section 15 ISLAM Start -->
        <div class="home_box islam_box"> <a title="Islam" href="#">
                <h3 class="urdu">اسلام</h3>
            </a>
          <!--   @foreach ($islam as $key => $item)
            <a title="Quran Majeed" class="isl_box" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"> <img width="80" height="80" class="lazyload" src="{{ Storage::url($item->image) }}" alt="Quran Majeed" />
                <p class="urdu ac rtl"> {{ $item->news_title }}</p>
            </a>
            @endforeach -->

            <div class="clear mb10"></div>

            <div class="list_hlaf_block urdu">
                @foreach ($islam as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="Ramzan Ul Mubarak Aur Uss Ke Adaab" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p> {{ $item->news_title }}</p>
                </a>
                 @endforeach
            </div>

            <div class="clear"></div>
        </div>
        <div class="ac mt10 mb10">
            <div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
                <div id="onDemand4" width="100%"> </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
        <!-- Section 15 ISLAM END -->

        <!-- Section 16 Intersting and Weired Start -->
        <div class="home_box weird_box"> <a title="Weird News" href="#">
                <h3 class="urdu">
                    دلچسپ و عجیب
                </h3>
            </a>
             @foreach ($dilcasab as $key => $item)
            <div class="relc_box2">
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}
                    "><img width="170" height="112" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                    <p class="fs16 lh32 urdu ar rtl">{{ $item->news_title }}  </p>
                </a>
                <div class="clear"></div>
            </div>
           @endforeach
            <div class="list_hlaf_block urdu">
                @foreach ($dilcasabfour as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p>{{ $item->news_title }}  </p>
                </a>
                @endforeach
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 16 Intersting and Weired END -->

        <!-- Section 17 Islamic Babies Names Start -->
        <div class="home_box names_box"> <a title="Islamic Baby Names" href="#">
                <h3 class="urdu">بچوں کے اسلامی نام</h3>
            </a>
            <div class="kname_wrap">
                <h4 class="boy_head urdu fs18 lh36 txt_white ac rtl pad5">لڑکوں کے اسلامی نام</h4>
                <div class="clear mb10"></div>
                @foreach ($boys_name as $key => $item)
                <a class="name_item urdu" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="16" height="16" src="{{ Storage::url($item->image) }}                    ">{{ $item->news_title }}
                </a>
               @endforeach
            </div>
            <div class="kname_wrap">
                <h4 class="girl_head urdu fs18 lh36 txt_white ac rtl pad5">لڑکیوں کے اسلامی نام</h4>
                <div class="clear mb10"></div>
                @foreach ($girls_name as $key => $item)
                <a class="name_item urdu" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="16" height="16" src="{{ Storage::url($item->image) }} ">
                     {{ $item->news_title }}
                </a>
                @endforeach
            </div>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Baby Names" href="#">بچوں کے نام</a></li>
                <li><a title="Islamic Urdu Names & Meanings for Boys and Girls" href="#">اسلامی نام</a></li>
                <li><a title="Boys Islamic Baby Names and Their Meanings" href="#">لڑکوں کے نام</a></li>
                <li><a title="Girls Islamic Baby Names and Their Meanings" href="#">لڑکیوں کے نام</a></li>
                <li><a title="Popular Baby Names" href="#">مشہور نام</a></li>
                <li><a title="Popular Boys Names" href="#">لڑکوں کے مشہور نام</a></li>
                <li><a title="Popular Girls Names" href="#">لڑکیوں کے مشہور نام</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 17 Islamic Babies Names END -->

        <!-- Section 18 Cooking Method Start -->
        <div class="home_box cooking_box"> <a title="Cooking Recipes In Urdu" href="#">
                <h3 class="urdu">پکوان - کھانے کی تراکیب</h3>
            </a>
            @foreach ($dinner as $key => $item)
            <a class="cook_box" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"> <img width="163" height="123" class="lazyload" src="{{ Storage::url($item->image) }}">
                <p class="urdu fs15 ac rtl full bsbb lh30">{{ $item->news_title }} </p>
            </a>
            @endforeach

            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Cooking Recipes" href="#">پکوان</a></li>
                <li><a title="Recipes" href="#">تراکیب</a></li>
                <li><a href="#">ٹوٹکے</a></li>
                <li><a title="Articles" href="#">مضامین</a></li>
                <li><a title="Top Recipes" href="#">پسندیدہ تراکیب</a></li>
                <li><a title="Live Cooking Channels" href="#">لائیو ٹی وی</a></li>
                <li><a title="Recipe Videos" href="#">ویڈیوز</a></li>
                <li><a title="Recent Recipes" href="#">نئی تراکیب</a></li>
                <li><a title="Pakistani Food Recipes" href="#">پاکستانی کھانے</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 18 Cooking Method END -->

        <!-- Section 19 Dictionary and Word Search Start -->
        <div class="home_box dictionary_box">
            <h3 class="urdu">ڈکشنری - اردو لغت</h3>
            <div class="search_dic">
                <h4 class="dic_head ac txt_white pad10 lh24 mb15 urdu">حرف تلاش کیجئے <a class="ar txt_white fr arial fs12" onClick="clear_field()" style="cursor: pointer;">Clear Search</a></h4>
                <form id="formSearch" name="formSearch" method="post" action="#" onSubmit="return emptyValues()">
                    <input class="dic_search_bar main_dic" type="text" name="dic_search" id="dic_search" value="" placeholder="تلاش کیجئے" onKeyUp="get_autocomplete(this.value)" />
                    <select class="dic_search_lang urdu ar rtl" name="lang_type" id="lang_type" onChange="keyboad_dic(this.value)">
                        <option selected value="english">انگلش</option>
                        <option value="roman_urdu">رومن اردو</option>
                        <option value="urdu">اردو</option>
                    </select>
                    <input type="submit" name="Submit" value="تلاش کیجئے" class="txt_white mt10 mb10 full bsbb fl pad2 dic_btn urdu" />
                </form>
                <div class="clear"></div>
            </div>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Dictionary" href="#">ڈکشنری</a></li>
                <li><a title="English to Urdu Dictionary" href="#">انگلش سے اردو ڈکشنری</a></li>
                <li><a title="Urdu to English Dictionary" href="#">اردو سے انگلش ڈکشنری</a></li>
                <li><a title="Roman Urdu to English Dictionary" href="#">رومن اردو سے انگلش ڈکشنری</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 19 Dictionary and Word Search END -->

        <!-- Section 20 Children's Word Start -->
        <div class="home_box kids_box"> <a title="Kids" href="#">
                <h3 class="urdu">بچوں کی دنیا</h3>
            </a>
            <div class="list_hlaf_block urdu">
                @foreach ($childeren as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="Chapar Phar Kar" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p> {{ $item->news_title }}</p>
                </a>
                @endforeach
            </div>
            <div class="clear mb10"></div>
            {{-- <div class="relc_box2 vid_box">
                <a title="Chidiya Rani" href="#"><img width="33" height="33" class="play_icon" src="assets/images/play_icon_video.webp"><img width="170" height="112" class="lazyload" src="assets/images/1518260577_vid_icon.jpg" alt="">
                    <p class="fs16 lh32 urdu ar rtl">چڑیا رانی</p>
                </a>
                <div class="clear"></div>
            </div>
            <div class="relc_box2 vid_box">
                <a title="Chidiya Rani" href="#"><img width="33" height="33" class="play_icon" src="assets/images/play_icon_video.webp"><img width="170" height="112" class="lazyload" src="assets/images/1518260577_vid_icon.jpg" alt="">
                    <p class="fs16 lh32 urdu ar rtl">چڑیا رانی</p>
                </a>
                <div class="clear"></div>
            </div>
            <div class="relc_box2 vid_box">
                <a title="Chidiya Rani" href="#"><img width="33" height="33" class="play_icon" src="assets/images/play_icon_video.webp"><img width="170" height="112" class="lazyload" src="assets/images/1518260577_vid_icon.jpg" alt="">
                    <p class="fs16 lh32 urdu ar rtl">چڑیا رانی</p>
                </a>
                <div class="clear"></div>
            </div>
            <div class="relc_box2 vid_box">
                <a title="Chidiya Rani" href="#"><img width="33" height="33" class="play_icon" src="assets/images/play_icon_video.webp"><img width="170" height="112" class="lazyload" src="assets/images/1518260577_vid_icon.jpg" alt="">
                    <p class="fs16 lh32 urdu ar rtl">چڑیا رانی</p>
                </a>
                <div class="clear"></div>
            </div> --}}
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Kids" href="#">بچے</a></li>
                <li><a title="Kids Articles" href="#">مضامین </a></li>
                <li><a title="Kids Urdu Stories" href="#">کہانیاں </a></li>
                <li><a title="Urdu Jokes" href="#">لطیفے</a></li>
                <li><a title="Urdu Riddles and Puzzles for Kids" href="#">پہیلیاں</a></li>
                <li><a title="Kids Games" href="#">گیمز </a></li>
                <li><a title="Kids Urdu Videos" href="#">ویڈیوز</a></li>
                <li><a title="Islamic Baby Names" href="#">بچوں کے اسلامی نام</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 20 Children's Word END -->

        <!-- Section 21 WOMEN Start -->
        <div class="home_box women_box"> <a title="Women" href="#">
                <h3 class="urdu">خواتین</h3>
            </a>
             @foreach ($girls as $key => $item)
            <div class="relc_box">

                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="235" height="155" class="lazyload" src="{{ Storage::url($item->image) }}" alt="Mufeed Totkay">
                    <p class="fs16 lh32 urdu ar rtl">{{ $item->news_title }} </p>
                </a>

                <div class="clear"></div>
            </div>
           @endforeach

            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Women" href="#">خواتین</a></li>
                <li><a title="Articles" href="#">مضامین</a></li>
                <li><a title="Tips" href="#">ٹوٹکے</a></li>
                <li><a title="Child Care" href="#">بچے کی نگہداشت</a></li>
                <li><a title="Beauty" href="#">خوبصورتی</a></li>
                <li><a title="Islam Aur Aurat" href="#">اسلام اور عورت</a></li>
                <li><a title="Gharelu Totkay" href="#">گھریلو ٹوٹکے</a></li>
                <li><a title="100 Naamwar Khawateen" href="#">100 نامور خواتین</a></li>
                <li><a title="Ghar Ki Aaraish" href="#">گھر کی آرائش</a></li>
                <li><a title="Rehnuma e Khareedari" href="#">رہنمائے خریداری</a></li>
                <li><a title="Baghbani" href="#">باغبانی</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 21 WOMEN END -->

        <!-- Section 22 Health Start -->
        <div class="home_box health_box"> <a title="Health" href="#">
                <h3 class="urdu">صحت</h3>
            </a>
             @foreach ($health as $key => $item)
            <div class="relc_box">

                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="235" height="155" class="lazyload" src="{{ Storage::url($item->image) }}" alt="">
                    <p class="fs16 lh32 urdu ar rtl">  {{ $item->news_title }}    </p>
                </a>

                <div class="clear"></div>
            </div>
            @endforeach


            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Health" href="#">صحت</a></li>
                <li><a title="Urdu Health Articles" href="#">مضامین</a></li>
                <li><a title="Urdu Health News" href="#">صحت کی خبریں</a></li>
                <li><a title="Ghiza Aur Sehat" href="#">غذا اور صحت</a></li>
                <li><a title="Exercise" href="#">ورزش</a></li>
                <li><a title="Blood Pressure" href="#">بلڈ پریشر</a></li>
                <li><a title="Depression" href="#">ذہنی مسائل</a></li>
                <li><a title="Sugar" href="#">ذیابیطس</a></li>
                <li><a title="Weight Loss" href="#">موٹاپا</a></li>
                <li><a title="Joint Pain" href="#">جوڑوں کا درد</a></li>
                <li><a title="Dengue" href="#">ڈینگی</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 22 Health END -->

        <!-- Section 23 Books Start -->
        <div class="home_box books_box"> <a title="Urdu Books" href="#">
                <h3 class="urdu">کتابیں</h3>
            </a>
            @foreach ($books as $key => $item)
            <a class="book_item" href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img width="230" height="90" class="lazyload" src="{{ Storage::url($item->image) }}" alt="" />
                <p class="urdu ac rtl"><span class="txt_blue">  ({{ $item->news_title }})</span></p>
            </a>
           @endforeach
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Urdu Books" href="#">کتابیں</a></li>
                <li><a title="Urdu Autobiography Books" href="#">آپ بیتی </a></li>
                <li><a title="Urdu Novel" href="#">ناول</a></li>
                <li><a title="Urdu Books On Personalities" href="#">شخصیات</a></li>
                <li><a title="Travelogue Urdu Books" href="#">سفرنامہ</a></li>
                <li><a title="History Books In Urdu" href="#">تاریخ</a></li>
                <li><a title="Politics Books In Urdu" href="#">سیاست</a></li>
                <li><a title="Urdu Afsane" href="#">افسانے</a></li>
                <li><a title="Funny Urdu Books" href="#">طنز و مزاح</a></li>
                <li><a title="Urdu Literature" href="#">اردو ادب</a></li>
            </ul>
            <div class="clear mb10"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 23 Books END -->

        <!-- Section 24 Mazah Start -->
        <div class="home_box mazah_box"> <a href="#">
                <h3 class="urdu">مزاح</h3>
            </a> <a title="Funny Urdu Joke Murgi Chura Le" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">مرغی چرا لی</p>
            </a><a title="Funny Urdu Joke 25 Saal" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">25 سال</p>
            </a><a title="Funny Urdu Joke Khawab" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">خواب</p>
            </a><a title="Funny Urdu Joke Kisi Ne Macharoon Se Pucha" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">کسی نے مچھروں سے پوچھا</p>
            </a><a title="Funny Urdu Joke Ajeeb O Ghareeb Machine" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">عجیب و غریب مشین</p>
            </a><a title="Funny Urdu Joke Doctor" class="mazah_art" href="#"><i class="fa fa-smile-o fs28 ml10"></i>
                <p class="urdu rtl ar art_title txt_green">ڈاکٹر</p>
            </a>
            <div class="list_hlaf_block urdu">
                @foreach ($mazaja as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p>{{ $item->news_title }} </p>
                </a>
                 @endforeach
            </div>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Urdu Mazah" href="#">مزاح</a></li>
                <li><a title="Urdu Funny Adab" href="#">مزاحیہ ادب</a></li>
                <li><a title="Urdu Funny Columns" href="#">مزاحیہ کالم</a></li>
                <li><a title="Urdu Funny Jokes" href="#">لطیفے</a></li>
                <li><a title="Urdu Funny Articles" href="#">مضامین</a></li>
                <li><a title="Famous Urdu Mazah" href="#">پسندیدہ ترین</a></li>
                <li><a title="Latest Urdu Mazah" href="#">نیا اضافہ</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Section 24 Mazah END -->

        <!-- Section 25 Aadab Start -->
        <div class="home_box adab_box"> <a title="Urdu Adab" href="#">
                <h3 class="urdu">ادب</h3>
            </a>
            <div class="list_hlaf_block urdu">
                @foreach ($adaba as $key => $item)
                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="Rait" width="70" height="70" class="lazyload" src="{{ Storage::url($item->image) }}">
                    <p> {{ $item->news_title }}</p>
                </a>
                @endforeach
            </div>
            <div class="clear mb10"></div>
            <ul class="box_menu urdu">
                <li><a title="Urdu Mazah" href="#">ادب</a></li>
                <li><a title="Urdu Funny Adab" href="#">اردو ادب</a></li>
                <li><a title="Urdu Funny Adab" href="#">نوبل پرائزبرائے ادب</a></li>
                <li><a title="Urdu Funny Adab" href="#">پاکستان کے صوفی شعرا</a></li>
                <li><a title="Urdu Funny Adab" href="#">اوورسیز پاکستانی</a></li>
                <li><a title="Urdu Funny Adab" href="#">مشاعرے</a></li>
                <li><a title="Urdu Funny Adab" href="#">عالمی ادب</a></li>
                <li><a title="Urdu Funny Adab" href="#">علاقائی ادب</a></li>
                <li><a title="Urdu Funny Adab" href="#">آپ بیتی</a></li>
                <li><a title="Urdu Funny Adab" href="#">افسانہ</a></li>
                <li><a title="Urdu Funny Adab" href="#">مضمون</a></li>
                <li><a title="Urdu Funny Adab" href="#">انٹرویوز</a></li>
                <li><a title="Urdu Funny Adab" href="#">ادبی خبریں</a></li>
                <li><a title="Urdu Funny Adab" href="#">تبصرہ کتب</a></li>
                <li><a title="Urdu Funny Adab" href="#">ناول</a></li>
                <li><a title="Urdu Funny Adab" href="#">ادبی رسائل و جرائد</a></li>
                <li><a title="Urdu Funny Adab" href="#">ادیبوں کے لطیفے</a></li>
                <li><a title="Urdu Funny Adab" href="#">ایک کتاب ایک مضمون</a></li>
                <li><a title="Urdu Funny Adab" href="#">100 عظیم آدمی</a></li>
                <li><a title="Urdu Funny Adab" href="#">حکایات</a></li>
                <li><a title="Urdu Funny Adab" href="#">سفر نامہ</a></li>
                <li><a title="Urdu Funny Adab" href="#">کہاوتیں</a></li>
                <li><a title="Urdu Funny Adab" href="#">الف لیلہ و لیلہ</a></li>
                <li><a title="Urdu Funny Adab" href="#">تقسیم ہند کی کہانی</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- Section 24 Aadab END -->

    <div class="side_bar fr">
        <div>
            <div class="biz_widget widget">
                <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">کیلنڈر
                </h3>
            </div>
            <div id="vanilla-calendar"></div>
            <div class="vanilla-calendar-info">
                <span id="vanilla-calendar-info-date"></span>

            </div>
         </div>

        <div id="finalAmount" class="text-center">

			<!-- Display the converted amount -->
			<h2>Converted Amount :
				<span class="finalValue"
					style="color:green;">
				</span>
			</h2>
		</div>

        <div class="widget">

            <!-- JOB TYPE -->

            <!-- Posted by -->

            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">تازہ ترین تصاویر</h3>
            @foreach ($News as $key => $news)
            <div class="boxgrid">
                <a href="#"><img alt="کراچی، امیر جماعت اسلامی پاکستان سراج الحق باغ مصطفی لطیف آباد میں .." width="145" height="113" class="lazyload" src="{{ Storage::url($news->image) }}">
                    <div class="boxcaption aj urdu fs10 rtl txt_white lh20">  {{ $news->news_title }}</div>

                </a>
            </div>
             @endforeach


        <div class="clear mb15"></div>
        <div class="side_menu_item_wrap"> <a class="side_menu_item urdu fs17 lh34" title="" href="#">اخبار</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">الیکشن</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">پاکستان</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">انٹرنیشنل</a> <a class="side_menu_item urdu fs17 lh34" title="" href="poetry/index.html">شاعری</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">مزاح</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">بچے</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">خواتین</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">پکوان</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">شوبز</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">آپکا دن</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">کھیل</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">اسلام</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">صحت</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">کتابیں</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">ٹیکنالوجی</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">کاروبار</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">موبائل</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">ڈکشنری</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">دلچسپ و عجیب</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">ویڈیوز</a> <a class="side_menu_item urdu fs17 lh34" title="" href="#">موسم</a> </div>
        <div class="clear mb15"></div>
        <div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
            <div id='Side2' style='margin: 0 auto;'>
            </div>
        </div>
        <div class="clear mb15"></div>
        <div class="biz_widget widget">
            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پرائز بانڈز کی فہرست</h3>
            <div class="prize_bonds_list urdu"> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">100</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">200</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">750</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">1500</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">7500</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">15000</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">25000</span> روپے</a> <a href="#"><span class="arial fwb ml5 mr5 txt_blue">40000</span> روپے</a> </div>
        </div>
        <div class="clear mb15"></div>
        <div class="widget psx_market mt15 mb15 fl full bsbb">
            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پاکستان اسٹاک ایکسچینج</h3>
            <p class="mb10">
            <p class="fr fs16 mt5 mb10 rtl urdu"> <span class="txt_red">اپ ڈیٹ کا وقت :</span> <span class="arial ml5">11:29:02am | 03-01-2023 </span></p>
            </p>
            <table class="mb10">
                <thead>
                    <tr class="pt10 pb10">
                        <th class="fs16">Status: Open</th>
                        <th class="fs16">Volume: 103,036,666</th>
                    </tr>
                </thead>
            </table>
            <table class="resp_table">
                <thead>
                    <tr>
                        <th class="txt_white bg_white fwb fs16 pt10 pb10 urdu">کے ایس ای <span class="arial">100</span> انڈیکس</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="txt_black">
                        <td class="txt_black"> <span class="fl pad5 fs16 txt_black">Current</span> <span class="fr txt_black fs16"></span> </td>
                    </tr>
                    <tr>
                        <td class="txt_black"> <span class="fl fs16">High</span> <span class="fr fs16"></span> </td>
                    </tr>
                    <tr>
                        <td class="txt_black"> <span class="fl fs16">Low</span> <span class="fr fs16"></span> </td>
                    </tr>
                    <tr>
                        <td class="txt_black"> <span class="fl fs16">Change</span> <span class="fr fs16">
                                <i class="fa fa fa-long-arrow-down txt_red"></i> </span> </td>
                    </tr>
                </tbody>
            </table> <a class="fl ar urdu fs15 lh30 txt_blue rtl pad5" href="business/psx-market-summary-up.html">مکمل تفصیل دیکھئے <i class="fa fa-angle-double-left mr5"></i></a>
        </div>
        <div class="clear mb15"></div>
        <div class="biz_widget widget">
            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">اوپن مارکیٹ ریٹس</h3>
            <table class="resp_table urdu ar rtl">
                <tr>
                    <th class="ar">کرنسی</th>
                    <th class="ar">خرید</th>
                    <th class="ar">فروخت</th>
                </tr>
                <tr>
                    <td class="ar"><img width="16" height="11" class="ml5" src=""><a href="#"> آسٹریلوی ڈالر</a></td>
                    <td class="ac arial"><a href="#">120</a></td>
                    <td class="ac arial"><a href="#">122</a></td>
                </tr>
                <tr>
                    <td class="ar"><img width="16" height="11" class="ml5" src=""><a href="#"> یورو</a></td>
                    <td class="ac arial"><a href="#">194</a></td>
                    <td class="ac arial"><a href="#">196</a></td>
                </tr>
                <tr>
                    <td class="ar"><img width="16" height="11" class="ml5" src=""><a href="#"> برطانوی پاونڈ</a></td>
                    <td class="ac arial"><a href="#">228.5</a></td>
                    <td class="ac arial"><a href="#">230.5</a></td>
                </tr>
                <tr>
                    <td class="ar"><img width="16" height="11" class="ml5" src=""><a href="#"> امریکی ڈالر</a></td>
                    <td class="ac arial"><a href="#">166.1</a></td>
                    <td class="ac arial"><a href="#">167</a></td>
                </tr>
            </table> <a class="fl ar urdu fs15 lh30 txt_blue rtl pad5" href="business/open-market-currency-rates-in-pakistan.html">مکمل ریٹس دیکھئے <i class="fa fa-angle-double-left mr5"></i></a>
        </div>
        <div class="clear mb15"></div>

        <div class="clear mb15"></div>
        <div class="baby_name_day">
            <a style="text-decoration:none;" class="name_box full bsbb fs17 ac" href="dictionary/english-to-urdu/scopula-meaning-in-urdu/78291.html">
                <p class="bg_hanfi txt_white full bsbb pt10 pb10 mb10 fl urdu">آج کا حرف</p>
                <p><span class="half fr bg_new fs15 txt_white pt10 pb10">English Word</span><span class="half fl txt_black pt10 pb10">Scopula</span></p>
                <div class="border_line clear"></div>
                <p><span class="half fr bg_new fs15 txt_white pt10 pb10 urdu">اردو معنی</span><span class="half fl txt_black pt10 pb10 lh20 mainTxt">زیرہ بر شک</span></p>
                <div class="border_line clear"></div>
                <p><span class="half fr bg_new fs15 txt_white pt10 pb10 urdu">رومن اردو</span><span class="half fl txt_black pt10 pb10">Zeera Bar Shak</span>
                    <div class="border_line clear"></div>
            </a>
        </div>
        <div class="clear mb15"></div>
        <div id="desk_side_last" class="">
            <div align="center" style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0 auto;">
                <div id="Side3"> </div>
                <script>
                    var refreshed_Side3 = false;
                    var pos_Side3 = document.getElementById("Side3").getBoundingClientRect().top;
                    var adAlmostVisibleScrollValueTop_Side3 = pos_Side3 - 100;
                    //console.log('Side3 must be viewd after : '+adAlmostVisibleScrollValueTop_Side3);
                    var listener_Side3 = function() {
                        if (window.pageYOffset >= adAlmostVisibleScrollValueTop_Side3 && !refreshed_Side3) {
                            googletag.cmd.push(function() {
                                googletag.pubads().refresh([Side3]);
                                // googletag.display('Side3');
                                //console.log('Side3 viewd at : '+window.pageYOffset);
                            });
                            refreshed_Side3 = true;
                            window.removeEventListener('scroll', listener_Side3);
                        }
                    }
                    window.addEventListener('scroll', listener_Side3);
                </script>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <script>
            // var Side3_fresher = false;
            if (document.getElementById("desk_side_last")) {
                var pos_desk_screen = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
                var pos_desk_side_last = document.getElementById("desk_side_last").getBoundingClientRect().top;
                pos_desk_side_last = pos_desk_side_last + pos_desk_screen;
                var listener_desk_last = function() {
                    /*if(Side3_fresher)
                    {
                        setInterval(function(){ googletag.pubads().refresh([Side3]);}, 10000);
                    }*/
                    if (window.pageYOffset >= pos_desk_side_last) {
                        // Refr
                        //Side3_fresher = true;
                        document.getElementById("desk_side_last").className = "last_banner_stick";
                    } else {
                        if (document.getElementById("desk_side_last").className == 'last_banner_stick') {
                            document.getElementById("desk_side_last").className = "";
                        }
                    }
                }
                window.addEventListener('scroll', listener_desk_last);
            }
        </script>
    </div>
    <div class="clear mb20"></div>
    <div class="clear"></div>
</div>
<div class="clear"></div>



@endsection

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const calendarInfoDate = document.querySelector('#vanilla-calendar-info-date');
        const calendarInfoTime = document.querySelector('#vanilla-calendar-info-time');
        const calendar = new VanillaCalendar('#vanilla-calendar', {
            settings: {
                lang: 'en',
                iso8601: false,
                selection: {
                    time: 12,
                },
                visibility: {
                    weekNumbers: true,
                },
            },
            actions: {
                clickDay(e, dates) {
                    calendarInfoDate.innerText = dates[0] ? dates : '«Day not selected»';
                },
                clickWeekNumber(e, number, days, year) {
                    console.log(`Week number: ${number}, year of the week: ${year},`, 'Days of this week:', days);
                },
                clickMonth(e, month) {
                    console.log(`Current month: ${month}`);
                },
                clickYear(e, year) {
                    console.log(`Current year: ${year}`);
                },
                clickArrow(e, year, month) {
                    console.log(`Current year: ${year}, current month: ${month}`);
                },
                changeTime(e, time) {
                    calendarInfoTime.innerText = time;
                },
            },
            popups: {
                '2022-12-28': {
                    modifier: 'bg-red',
                    html: 'Meeting at 9:00 PM',
                },
                '2022-09-13': {
                    modifier: 'bg-red',
                    html: 'Meeting at 6:00 PM',
                },
                '2022-11-17': {
                    modifier: 'bg-orange s',
                    html: `<div>
                        <u><b>12:00 PM</b></u>
                        <p style="margin: 5px 0 0; text-align: left; font-size: 12px;">Airplane in Las Vegas</p>
                    </div>`,
                },
            },
            DOMTemplates: {
                default: `
                    <div class="vanilla-calendar-header">
                        <div class="vanilla-calendar-header__content ">
                            <#Month /> | <#Year />
                        </div>
                        <#ArrowPrev />
                        <#ArrowNext />
                    </div>
                    <div class="vanilla-calendar-wrapper">
                        <#WeekNumbers />
                        <div class="vanilla-calendar-content">
                            <#Week />
                            <#Days />
                        </div>
                    </div>
                    <#ControlTime />
                `,
                month: `
                    <div class="vanilla-calendar-header">
                        <div class="vanilla-calendar-header__content">
                            <#Month /> | <#Year />
                        </div>
                    </div>
                    <div class="vanilla-calendar-wrapper">
                        <div class="vanilla-calendar-content">
                            <#Months />
                        </div>
                    </div>
                `,
                year: `
                    <div class="vanilla-calendar-header">
                        <div class="vanilla-calendar-header__content">
                            <#Month /> | <#Year />
                        </div>
                        <#ArrowPrev />
                        <#ArrowNext />
                    </div>
                    <div class="vanilla-calendar-wrapper">
                        <div class="vanilla-calendar-content">
                            <#Years />
                        </div>
                    </div>
                `,
            },
        });
        calendar.init();
        calendarInfoTime.innerText = calendar.selectedTime;
    });
</script>
<script>

    // Include api for currency change
    const api = "https://api.exchangerate-api.com/v4/latest/USD";

    // For selecting different controls
    var search = document.querySelector(".searchBox");
    var convert = document.querySelector(".convert");
    var fromCurrecy = document.querySelector(".from");
    var toCurrecy = document.querySelector(".to");
    var finalValue = document.querySelector(".finalValue");
    var finalAmount = document.getElementById("finalAmount");
    var resultFrom;
    var resultTo;
    var searchValue;

    // Event when currency is changed
    fromCurrecy.addEventListener('change', (event) => {
        resultFrom = `${event.target.value}`;
    });

    // Event when currency is changed
    toCurrecy.addEventListener('change', (event) => {
        resultTo = `${event.target.value}`;
    });

    search.addEventListener('input', updateValue);

    // Function for updating value
    function updateValue(e) {
        searchValue = e.target.value;
    }

    // When user clicks, it calls function getresults
    convert.addEventListener("click", getResults);

    // Function getresults
    function getResults() {
        fetch(`${api}`)
            .then(currency => {
                return currency.json();
            }).then(displayResults);
    }

    // Display results after conversion
    function displayResults(currency) {
        let fromRate = currency.rates[resultFrom];
        let toRate = currency.rates[resultTo];
        finalValue.innerHTML =
        ((toRate / fromRate) * searchValue).toFixed(2);
        finalAmount.style.display = "block";
    }

    // When user click on reset button
    function clearVal() {
        window.location.reload();
        document.getElementsByClassName("finalValue").innerHTML = "";
    };




        </script>


<script src=" {{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('mag/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mag/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('mag/js/jquery.ripples-min.js')}}"></script>
<script src="{{asset('mag/js/particles.min.js')}}"></script>
<script src="{{asset('mag/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('mag/js/countdown.min.js')}}"></script>
<script src="{{asset('mag/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('mag/js/typewritter.js')}}"></script>
<script src="{{asset('mag/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('mag/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('mag/js/fancyBox v2.1.5.js')}}"></script>
<script src="{{asset('mag/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('mag/js/slick.js')}}"></script>
<script src="{{asset('mag/js/jquery.barfiller.js')}}"></script>
<script src="{{asset('mag/js/swiper.min.js')}}"></script>
<script src="{{asset('mag/js/waypoints.min.js')}}"></script>
<script src="{{asset('mag/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('mag//js/owl.carousel.min.js')}}"></script>
<script src="{{asset('mag//js/megapack-main.js')}}"></script>
<script src="{{asset('mag//js/jquery.scrollUp.min.js')}}"></script>
<script defer src="{{asset('mag/vanilla-calendar.min.js')}}"></script>




@endpush
