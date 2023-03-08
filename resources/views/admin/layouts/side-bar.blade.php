<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="{{asset('pakistantop/assets/images/favicon.png')}}" alt="user-img"
                    class="avatar avatar-lg brround">
                <a href="javascript:void(0)" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2>Admin</h2>
            </div>
        </div>
    </div>
    <ul class="side-menu">

        <li>
            <a class="side-menu__item {{ Request::is('admin/home*') ? 'active' : '' }}" href="{{route('admin.home')}}" ><i
                class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">
                    Dashboard</span></a>

                    <a class="side-menu__item {{ Request::is('admin/news*') ? 'active' : '' }}" href="{{route('admin.news.index')}}" ><i
                        class="side-menu__icon fa fa-newspaper-o"></i><span class="side-menu__label">
                            News</span></a>
                    {{-- <a class="side-menu__item {{ Request::is('admin/leave_request_verification*') ? 'active' : '' }}" href="{{route('admin.leave_request_verification.index')}}" ><i
                        class="side-menu__icon fa fa-paper-plane"></i><span class="side-menu__label">
                        Leave Request Verification</span></a>
                        <a class="side-menu__item {{ Request::is('admin/religion_and_socity*') ? 'active' : '' }}" href="{{route('admin.religion_and_socity.index')}}" ><i
                            class="side-menu__icon fa fa-building "></i><span class="side-menu__label">
                            Religion And Socity</span></a>
                        <a class="side-menu__item {{ Request::is('admin/reference_information*') ? 'active' : '' }}" href="{{route('admin.reference_information.index')}}" ><i
                            class="side-menu__icon fa fa-list"></i><span class="side-menu__label">
                            Reference information</span></a>--}}
                            <a class="side-menu__item {{ Request::is('admin/regulations*') ? 'active' : '' }}" href="{{route('admin.regulations.index')}}" ><i
                                class="side-menu__icon fa fa-file"></i> <span class="side-menu__label">
                                News Paper</span></a>
                            <a class="side-menu__item {{ Request::is('admin/video*') ? 'active' : '' }}" href="{{route('admin.video.index')}}" ><i
                                class="side-menu__icon fa fa-video-camera"></i><span class="side-menu__label">
                                    Video</span></a>
                        {{-- <a class="side-menu__item {{ Request::is('admin/area*') ? 'active' : '' }}" href="{{route('admin.area.index')}}" ><i
                                class="side-menu__icon fa fa-globe"></i><span class="side-menu__label">
                                    Area</span></a>
                            <a class="side-menu__item {{ Request::is('admin/places*') ? 'active' : '' }}" href="{{route('admin.places.index')}}" ><i
                                class="side-menu__icon fa fa-globe"></i><span class="side-menu__label">
                                    Places</span></a> --}}
        </li>



        {{--  <li>
            <a class="side-menu__item {{ Request::is('contacts*') ? 'active' : '' }}" href="{{route('contact.index')}}"><i
                    class="side-menu__icon fa fa-address-book"></i><span class="side-menu__label">
                        Contacts</span></a>
        </li> --}}

    </ul>

</aside>
