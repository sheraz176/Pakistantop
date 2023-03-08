<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('main-site.layouts.meta')



    @yield('title')
    @include('main-site.layouts.style')



</head>

<body id="body-start">
    <a href="#main_content" id="skiplink">Skip to main content</a>
    <div id="fb-root"></div>
    <div id="main_wrap">
        <div id="canvas">
            <div class="container">
                {{-- <form style="text-align:center" class="set-position-top">
                    <!-- <label for="kb_selected_color">Color Picker</label> -->
                    <span id="hex">(#000000)</span>
                    <input type="color" id="kb_selected_color">
                </form>
                <div class="top_head_bar" id="top_head_bar">
                    <div class="disp_spacer full ac"> <a href="#">اُردو</a> <a href="#">English</a> <a href="#">العربية</a> </div>
                </div> --}}
                {{-- <div class="header" style="position: relative;">
                    <div class="hlogo_box">
                        <a target="_top" href="{{route('main-site.home.index')}}"> <img height="60px" src="{{asset('pakistantop/assets/images/logo-org.png')}}" alt=""> </a>
                    </div> --}}


                      {{-- {{$mode->status}} --}}

                    {{-- <form action="{{ route('id.update', $item->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id"  value="{{ $item->id }}"  />
                        <input type="hidden" value="0" name="status"/>
                        <input type="submit" class="btn btn-success btn-block w-auto" value="Accept" />
                    </form>
                    @else
                    <form action="{{ route('admin.import_inventory.update', $item->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id"  value="{{ $item->id }}"  />
                        <input type="hidden" value="1" name="status"/>
                        <input type="submit" class="btn btn-danger btn-block w-auto" value="Panding" />
                    </form>
                    @endif --}}
                    <div class="header set-flex-items-nav" style="position: relative;">
                        <div class="hlogo_box">
                            <a target="_top" href="{{route('main-site.home.index')}}"> <img height="60px" src="{{asset('pakistantop/assets/images/pak_top.png')}}" alt=""> </a>

                        </div>
                        <div class="set-font-text set-d-flex">
                            <div class="">

                                @guest
                                <a href="clogin">Login</a>
                                <span>/</span>
                                <a href="cregister">Register</a>
                                @else

                                <a href="#">{{ Auth::user()->name }}</a>
                                <span>/</span>
                                <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                                <select>
                                    <option>Urdu</option>
                                    <option>English</option>
                                </select>
                            </div>
                            <div class="set-ps-18" style="margin-right: 8px;">
                                <input type="checkbox" class="checkbox"  id="checkbox" {{session()->get('toggle_check')==1?'checked="checked"':''}}>
                                <label for="checkbox" class="label">
                                    <i class="fas fa-moon"></i>
                                    <i class="fas fa-sun"></i>
                                    <div class="ball"></div>
                                </label>
                            </div>
                        </div>



                </div>
                <div class="clear"></div>
                {{-- @include('main-site.layouts.mode') --}}

    @include('main-site.layouts.header')

    @yield('content')
    {{-- @include('main-site.layouts.mobile-app')
    @include('main-site.layouts.partners') --}}
    @include('main-site.layouts.footer')

    <div class="clear"></div>
</div>
<!-- FOOTER Section END -->
</div>
</div>

    @include('main-site.layouts.script')

</body>

</html>
