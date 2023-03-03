<header>
    <div class="wrapper">
        <div class="top">
            <div class="left">
                <!-- <a href="/ru/" class="logo-1"></a> -->
                <a href="{{route('main-site.home.index')}}" class="logo-2"></a>
                <span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> {{__('lang.Department of Religious Affairs of Almaty city')}}</font>
                    </font>
                </span>
                <div class="menu-icon"><i></i></div>
            </div>
            <div class="right">
                <div class="versions left">
                    <a href="{{route('changeLang',['lang'=>'k3'])}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; " class="{{session()->get('locale') == 'k3' ? 'active-lang ':''}}">Kaz</font>
                        </font>
                    </a>
                    <a href="{{route('changeLang',['lang'=>'ru'])}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; " class="{{session()->get('locale') == 'ru' ? 'active-lang ':''}}">Rus</font>
                        </font>
                    </a>
                </div>
                <div class="gov left not-mobile">
                    <a title="{{__('lang.Department of Religious Affairs of Almaty city')}}"
                        href="https://www.gov.kz/memleket/entities/almaty-din?lang=ru&amp;ysclid=l7bihe9bta810725188"
                        target="_blank">
                        <img src="images/gov-logo.png" alt="" draggable="false">
                    </a>
                </div>
                <div class="socials left">
                    <a target="_blank" class="social instagram" href="#"></a>
                    <a target="_blank" class="social tiktok" href="#"></a>
                    <a target="_blank" class="social facebook" href="#"></a>
                    <a target="_blank" class="social telegram" href="#"></a>
                    <a target="_blank" class="social vk" href="#"></a>
                </div>
                <a href="{{route('main-site.pages.verification')}}" class="read-more">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> {{__('lang.Leave a request for verification')}}</font>
                    </font>
                </a>
                <a href="{{route('main-site.pages.religiouscard')}}" class="goto">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> {{__('lang.Religious card')}}</font>
                    </font>
                </a>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('main-site.pages.about')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.about the project')}}</font>
                        </font>
                    </a></li>
                <li><a href="{{route('main-site.pages.regulations')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{__('lang.Regulations')}}</font>
                        </font>
                    </a></li>
                <li><a href="{{route('main-site.pages.religionandsocity')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{__('lang.Religion and society')}}</font>
                        </font>
                    </a></li>
                <li><a href="{{route('main-site.pages.referenceinformation')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.reference Information')}}</font>
                        </font>
                    </a></li>
                <li><a href="{{route('main-site.pages.news')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{__('lang.News')}}</font>
                        </font>
                    </a></li>
                <li><a href="{{route('main-site.pages.video')}}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{__('lang.Video')}}</font>
                        </font>
                    </a></li>
            </ul>
        </div>
        <div class="mobile-menu">
            <div class="logos">
                <a href="{{route('main-site.home.index')}}" class="logo-1"></a>
                <a href="{{route('main-site.home.index')}}" class="logo-2"></a>
                <span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{__('lang.Department of Religious Affairs of Almaty city')}}</font>
                    </font>
                </span>
            </div>
            <div class="center">
                <a href="{{route('main-site.home.index')}}" class="read-more">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> {{__('lang.Leave a request for verification')}}</font>
                    </font>
                </a>
                <a href="{{route('main-site.home.index')}}" class="goto">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{__('lang.Religious card')}}</font>
                    </font>
                </a>
            </div>
            <div class="versions">
                <a href="{{route('changeLang',['lang'=>'k3'])}}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;" class="{{session()->get('locale') == 'k3' ? 'active-lang ':''}}">Kaz </font>
                    </font>
                </a>
                <a href="{{route('changeLang',['lang'=>'ru'])}}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;" class="{{session()->get('locale') == 'ru' ? 'active-lang ':''}}">Rus</font>
                    </font>
                </a>
            </div>
            <div class="gov">
                <a title="Department of Religious Affairs of Almaty city"
                    href="https://www.gov.kz/memleket/entities/almaty-din?lang=ru&amp;ysclid=l7bihe9bta810725188"
                    target="_blank">
                    <img src="/template/images/gov-logo.png" alt="" draggable="false">
                </a>
            </div>
            <div class="socials">
                <a target="_blank" class="social instagram" href="https://www.instagram.com/din_almaty/"></a>
                <a target="_blank" class="social tiktok" href="https://tiktok.com/@din_almaty"></a>
                <a target="_blank" class="social facebook" href="https://www.facebook.com/dinalmaty.kz"></a>
                <a target="_blank" class="social telegram" href="https://telegram.me/almaty_din"></a>
                <a target="_blank" class="social vk" href="https://vk.com/public99277449"></a>
            </div>
            <ul>
                <li><a href="/ru/about">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{__('lang.about the project')}}</font>
                        </font>
                    </a></li>
                <li><a href="/ru/regulations">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.Regulations')}}</font>
                        </font>
                    </a></li>
                <li><a href="/ru/religion-and-society">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.Religion and society')}}</font>
                        </font>
                    </a></li>
                <li><a href="/ru/references">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.reference Information')}}</font>
                        </font>
                    </a></li>
                <li><a href="/ru/news">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.News')}}</font>
                        </font>
                    </a></li>
                <li><a href="/ru/video">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> {{__('lang.Video')}}</font>
                        </font>
                    </a></li>
            </ul>
        </div>
    </div>
</header>
