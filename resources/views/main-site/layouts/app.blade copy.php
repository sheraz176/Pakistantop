<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('main-site.layouts.meta')



    @yield('title')
    @include('main-site.layouts.style')



</head>

<body>
    <div class="modal-window">
        <div class="modal">
            <div class="modal-wrapper">
            </div>
        </div>
    </div>
    @include('main-site.layouts.header')

    @yield('content')
    @include('main-site.layouts.mobile-app')
    @include('main-site.layouts.partners')
    @include('main-site.layouts.footer')


    @include('main-site.layouts.script')

</body>

</html>
