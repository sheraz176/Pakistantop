@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.News')}} | {{__('lang.Religionmap')}}</title>




@endsection
@section('content')




                <div class="clear"></div>
                <!-- <div id="gpt-970-banner-wrap">
                    <div align="center" id='gpt-970-banner' style="margin:0 auto;">
                    </div>
                </div> -->
                <!-- SET SEARCH BAR -->

                <div class="set-carousel-my">
            <div>
              <div class="carousel">
                <ul class="slides">
                  <input type="radio" name="radio-buttons" id="img-1" checked />
                  <li class="slide-container">
                    <div class="slide-image">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Timisoara_-_Regional_Business_Centre.jpg">
                    </div>
                    <div class="carousel-controls">
                      <label for="img-3" class="prev-slide">
                        <span>&lsaquo;</span>
                      </label>
                      <label for="img-2" class="next-slide">
                        <span>&rsaquo;</span>
                      </label>
                    </div>
                  </li>
                  <input type="radio" name="radio-buttons" id="img-2" />
                  <li class="slide-container">
                    <div class="slide-image">
                      <img src="https://content.r9cdn.net/rimg/dimg/db/02/06b291e8-city-14912-171317ad83a.jpg?width=1750&height=1000&xhint=3040&yhint=2553&crop=true">
                    </div>
                    <div class="carousel-controls">
                      <label for="img-1" class="prev-slide">
                        <span>&lsaquo;</span>
                      </label>
                      <label for="img-3" class="next-slide">
                        <span>&rsaquo;</span>
                      </label>
                    </div>
                  </li>
                  <input type="radio" name="radio-buttons" id="img-3" />
                  <li class="slide-container">
                    <div class="slide-image">
                      <img src="https://speakzeasy.files.wordpress.com/2015/05/twa_blogpic_timisoara-4415.jpg">
                    </div>
                    <div class="carousel-controls">
                      <label for="img-2" class="prev-slide">
                        <span>&lsaquo;</span>
                      </label>
                      <label for="img-1" class="next-slide">
                        <span>&rsaquo;</span>
                      </label>
                    </div>
                  </li>
                  <!-- <div class="carousel-dots">
                    <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                    <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                    <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
                  </div> -->
                </ul>
              </div>
            </div>
          </div>
                <div id='div-gpt-ad-1538732554188-0' style='height:1px; width:1px;'> </div>
                <div class="clear mb5"></div>
                <div id="live_match_info_box_wrap"></div>
                <div class="clear"></div>
                <div id="breaking_box_wrap"></div>
                <div class="clear"></div>
                <ul class="bread_crumb_en">
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">Pakistan</a></li>
                </ul>
                <div class="clear"></div>
                <div id="main_content">
                    <div id="top_banner"></div>
                    <div class="main_bar fl">


                        <div class="clear mb10"></div>
                        <div class="home_box arts_box">
                            <h3 class="urdu">گرائیڈ ویو میں نتیجہ تلاش
                                 </h3>
                                 @foreach ($news as $key => $news)
                            <div class="relc_box">
                                <a href="{{ route('main-site.pages.news-details', [$news->id,$news->slug]) }}">
                                    <img width="235" height="155" class="lazyload" src="{{ Storage::url($news->image) }}">
                                    <p class="fs16 lh32 urdu ar rtl">
                                        {{ $news->news_title }}
                                    </p>
                                </a>
                                <div class="clear"></div>
                            </div>
                               @endforeach
                            <div class="clear"></div>
                            {{-- <a class="mlink urdu fs16 lh32" href="#"><i class="fa fa-angle-double-left mr5"></i> مزید مضامین</a> --}}
                        </div>
                        <div class="clear mb10"></div>
                        <div class="ac">
                            <div align="center" style="text-align:center; padding-top:5px; padding-bottom:5px; margin:0 auto;">
                                <div id="inCont1" width="336">
                                </div>
                            </div>
                        </div>
                        <div class="clear mb10"></div>
                        <div class="home_box cols_box">
                            <h3 class="urdu"> List view </h3>
                            <div class="list_hlaf_block urdu">
                                @foreach ($items as $key => $item)
                                <a href="{{ route('main-site.pages.news-details', [$item->id,$item->slug]) }}"><img alt="image" width="70" height="70" class="lazyload" src="{{ Storage::url($news->image) }}">
                                    <p>{{$item->news_title }}</p>
                                </a>
                                @endforeach
                            </div>




                            <div class="clear"></div>
                            {{-- <a class="mlink urdu fs16 lh32" href="#"><i class="fa fa-angle-double-left mr5"></i> مزید کالم</a> --}}
                        </div>
                        <div class="clear mb20"></div>
                        {{-- <div class="cnt_box">
                            <h2>Pakistan Latest News in Urdu, Articles, Photos, Videos, Local Events</h2>
                            <p>The Pakistan News section from Urdu Point allows you to have complete Pakistan Latest News, and this news contains news from all the cities of Pakistan. Any event, incident, achievement, or substantial news is regularly updated on this Pakistan News Headlines section.</p>
                            <h2>Daily Pakistan News</h2>
                            <P>In this section, readers would get the latest daily updates regarding Pakistan’s happening events for the day, week, and month. In addition, you can also get all the Pakistan Cricket News updates and Pakistan Economy News updates as they happen.</P>
                            <h2>Pakistan Latest News</h2>
                            <P>This Pakistan News section brings you closer to the events happening in Pakistan throughout the day, week, and month. All the news related to Pakistan Cricket News and Pakistan Economic News are illustrated in Breaking News Pakistan. Throughout the vastness of Pakistan, the news is taking place, and you can have access to that particular news on the Today News Headlines Pakistan.</P>
                            <h2>Pakistan 24/7 News</h2>
                            <p>Pakistan is an important country in the world, and a lot is happening in the country daily. UrduPoint provides its users with local Pakistan News here at the UrduPoint Pakistan Section. Now you have access to daily Pakistan News, Pakistan News Channel List, and Pakistan News Today with the help of UrduPoint News, Information, Videos, Photos, Articles, directories, and events details.</p>
                            <P>At UrduPoint, we cover every Pakistan News to provide full coverage of all the events and incidents happening in Pakistan.</P>
                            <p>Pakistan was officially named the Islamic Republic of Pakistan. Pakistan is in South Asia, neighboring China, India, Iran, and Afghanistan. Pakistan has over 225.2 million population making it the second-largest Muslim population country in the world. Area wise it is the 33rd largest country with an area of 881,913 square kilometers.</p>
                            <P>Pakistan has four provinces and five rivers. And these rivers make the most fertile land in the world, the Indus delta. These fertile lands of Pakistan make it a versatile geographic area for cultivation. Enjoy all four seasons, and travel from Seaview Karachi to the K2 in Gilgit Baltistan.</P>
                        </div> --}}
                    </div>
                    <div class="side_bar fr">

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
      @foreach ($items as $item)
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
                        {{-- <form class="side_search_form" id="search_form" action="">
                            <input name="q" class="unicode urdu fs14 lh28 ar rtl" type="text" placeholder="خبریں تلاش کیجئے‎" value="">
                            <input class="urdu fs15 lh30" type="submit" value="تلاش کیجئے">
                            <div class="clear"></div>
                        </form>
                        <form action="" method="">
                                <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">اقسام</h3>
                                <div class="set-category-checkbox-main urdu">
                                    <ul>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side">
                                                    <span>14</span>
                                                </div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">آئی ٹی/سافٹ ویئر</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side">
                                                    <span>4</span>
                                                </div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">آئی ٹی/ہارڈ ویئر</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side">
                                                    <span>108</span>
                                                </div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">باورچی</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side">
                                                    <span>24</span>
                                                </div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">ڈرائیور</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="set-filter-btn">
                                        <button type="submit">فلٹر لگائیں</button>
                                    </div>
                                </div>
                            </form>
                            <!-- JOB TYPE -->
                            <form action="" method="" class="set-mt-15px">
                                <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">ملازمت کی قسم</h3>
                                <div class="set-category-checkbox-main urdu">
                                    <ul>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">پارٹ ٹائم</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">پوراوقت</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">گھر سے کام</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">انٹرنشپ</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="set-filter-btn">
                                        <button type="submit">فلٹر لگائیں</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Posted by -->
                            <form action="" method="" class="set-mt-15px">
                                <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پوسٹ کردہ بذریعہ</h3>
                                <div class="set-category-checkbox-main urdu">
                                    <ul>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">انتظام</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">پوراوقت</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="set-main-flex-cat">
                                                <div class="set-icon-side"></div>
                                                <div class="set-flex-align">
                                                    <label class="set-category-checkbox">HR</label>
                                                    <input type="checkbox" class="set-height-checkbox" >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="set-filter-btn">
                                        <button type="submit">فلٹر لگائیں</button>
                                    </div>
                                </div>
                            </form>
                        <div class="clear mb15"></div>
                        <div id="desk_side_first" class="">
                            <div align="center" style="text-align:center; padding-bottom:5px; width:300px; margin:0 auto;">
                                <div id='Side1-banner'>
                                </div>
                            </div>
                        </div>
                        <div class="clear mb15"></div>
                        <div class="widget">
                            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پاکستان کے مشہور شہر</h3>
                            <ul class="auth_side_list">
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clear mb10"></div>
                        <div class="widget">
                            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پاکستان کے تمام شہر</h3>
                            <ul class="auth_side_list">
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <li>
                                    <a class="full fr fs15 lh30 ar rtl urdu" href="#">
                                    <img width="40" height="40" class="lazyload" src="assets/images/1383299027_karachi.jpg" alt="">کراچی</a>
                                </li>
                                <div class="clear"></div><a class="full fr bsbb bg_blue urdu txt_white ac fs16 lh32" onClick="manage_more_city();" id="more_city_wrap_hndlr" href="#">مزید شہر</a>
                            </ul>
                        </div>
                        <div class="clear mb15"></div> --}}
                        <!-- <div align="center" style="text-align:center; padding-top:0px; padding-bottom:5px; margin:0 auto;">
                            <div id='Side2' style='margin: 0 auto;'>

                            </div>
                        </div> -->
                        {{-- <div class="clear mb15"></div>
                        <div class="widget">
                            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پاکستان کے سیاحتی مقامات</h3>
                            <a class="gall_item" href="#">
                                <img width="135" height="135" class="lazyload hwa" src="assets/images/1435147885_big.jpg" alt="" />
                                <p class="fs14 lh28 txt_blue urdu">مبارک حویلی - <span class="txt_red fs13 lh26">لاہور</span></p>
                            </a>
                            <a class="gall_item" href="#">
                                <img width="135" height="135" class="lazyload hwa" src="assets/images/1435147885_big.jpg" alt="" />
                                <p class="fs14 lh28 txt_blue urdu">مبارک حویلی - <span class="txt_red fs13 lh26">لاہور</span></p>
                            </a>
                            <a class="gall_item" href="#">
                                <img width="135" height="135" class="lazyload hwa" src="assets/images/1435147885_big.jpg" alt="" />
                                <p class="fs14 lh28 txt_blue urdu">مبارک حویلی - <span class="txt_red fs13 lh26">لاہور</span></p>
                            </a>
                            <a class="gall_item" href="#">
                                <img width="135" height="135" class="lazyload hwa" src="assets/images/1435147885_big.jpg" alt="" />
                                <p class="fs14 lh28 txt_blue urdu">مبارک حویلی - <span class="txt_red fs13 lh26">لاہور</span></p>
                            </a>
                            <div class="clear mb10"></div>
                            <a class="full fr bsbb bg_blue urdu txt_white ac fs16 lh32" href="#">مزید سیاحتی مقامات</a>
                        </div>
                        <div class="clear mb10"></div>
                        <div class="clear mb20"></div>
                        <div class="widget">
                            <h3 class="fs18 lh36 ar rtl urdu pt5 pb5">پاکستان کی تصاویری گیلریاں</h3>
                            <a class="series_box" href="#">
                                <img alt="" width="300" height="140" class="lazyload hwa" src="assets/images/pic_e8671_1605939862.jpg" >
                                <p class="urdu fs18 lh36 pad5 txt_white bsbb full ac rtl">ایک چھوٹے سے کریانہ سٹور سے شروع ہونیوالا کاروبار پاکستان میں ایک بڑی ریٹیل چین بن گئی، ..</p>
                            </a>
                            <a class="series_box" href="#">
                                <img alt="" width="300" height="140" class="lazyload hwa" src="assets/images/pic_e8671_1605939862.jpg" >
                                <p class="urdu fs18 lh36 pad5 txt_white bsbb full ac rtl">ایک چھوٹے سے کریانہ سٹور سے شروع ہونیوالا کاروبار پاکستان میں ایک بڑی ریٹیل چین بن گئی، ..</p>
                            </a>
                            <a class="series_box" href="#">
                                <img alt="" width="300" height="140" class="lazyload hwa" src="assets/images/pic_e8671_1605939862.jpg" >
                                <p class="urdu fs18 lh36 pad5 txt_white bsbb full ac rtl">ایک چھوٹے سے کریانہ سٹور سے شروع ہونیوالا کاروبار پاکستان میں ایک بڑی ریٹیل چین بن گئی، ..</p>
                            </a>
                            <a class="series_box" href="#">
                                <img alt="" width="300" height="140" class="lazyload hwa" src="assets/images/pic_e8671_1605939862.jpg" >
                                <p class="urdu fs18 lh36 pad5 txt_white bsbb full ac rtl">ایک چھوٹے سے کریانہ سٹور سے شروع ہونیوالا کاروبار پاکستان میں ایک بڑی ریٹیل چین بن گئی، ..</p>
                            </a>
                            <div class="clear mb10"></div>
                            <a class="full fr bsbb bg_blue urdu txt_white ac fs16 lh32" href="#">مزید تصاویری گیلریاں</a>
                        </div> --}}
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>


            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>











@endsection

@push('scripts')

@endpush
