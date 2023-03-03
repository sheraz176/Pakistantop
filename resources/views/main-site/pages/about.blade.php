@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.About')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')
<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="{{route('main-site.pages.about')}}">{{__('lang.about the project')}}</a>
        </div>
        <h2 class="white">{{__('lang.about the project')}}</h2>
        <p class="white">{{__('lang.A service that allows you to find and learn more information about the religious sites of the city of Almaty')}}</p>
        <img src="images/about-img.png" alt="" draggable="false">
    </div>
</div>

<div class="about-hints">
    <div class="wrapper">
        <div class="list">
            <div class="hint i1">{{__('lang.Here you can find the official list of denominations')}}</div>
            <div class="hint i6">{{__('lang.The map shows all places of worship with detailed information')}}</div>
            <div class="hint i7">{{__('lang.Information about missionaries and their activities on the territory of the Republic of Kazakhstan')}}</div>
            <div class="hint i8">{{__('lang.A database of religious premises for various purposes was compiled')}}</div>
        </div>
    </div>
</div>

<div class="about-project">
    <div class="wrapper">
        <div class="cols">
            <div class="col-68">
                <div class="page-text">
                    <h2>{{__('lang.Description of the objectives of the interactive maps project')}}</h2>

<p>{{__('lang.The Interactive Religious Map is a unique project aimed at optimizing the monitoring of the religious situation in the city, as well as involving citizens in the monitoring process.')}}</p>

<p>{{__('lang.The site was created as a structured database, where updates and adjustments will take place periodically. Here you can find:')}}</p>

<ul>
<li>{{__('lang.all 190 registered religious associations;')}}</li>
<li>{{__('lang.area of ​​activity of missionaries;')}}</li>
<li>{{__('lang.registered places (shops) for the sale of religious literature and paraphernalia;')}}</li>
<li>{{__('lang.unregistered places (shops) for the sale of religious literature and paraphernalia;')}}</li>
<li>{{__('lang.places of the greatest concentration of adherents of non-traditional movements;')}}</li>
<li>{{__('lang.prayer rooms outside places of worship, including those operating without permission.')}}</li>
</ul>
                </div>
            </div>
            <div class="col-32">
                <p>{{__('lang.The main feature is the ability for registered users to leave an application in case of identifying “new” (unregistered or previously unknown) places where religious rites and rituals are performed, missionaries operate, religious literature and paraphernalia are sold.')}}</p>
                <a href="{{route('main-site.pages.verification')}}" class="read-more">{{__('lang.Submit your application')}}</a>
            </div>
        </div>
    </div>
</div>

<div class="city-situation">
    <div class="wrapper">
        <div class="cols">
            <div class="col-30"></div>
            <div class="col-70">
                <h2>{{__('lang.The situation in the city')}}</h2>
                <p><p>{{__('lang.In Almaty, there is a steady upward trend in the religiosity of the population. The bulk of believing citizens today consists of Muslims and Orthodox Christians.')}}</p>

<p>{{__('lang.There are 190 registered religious associations in the metropolis, which are represented by 17 confessions. It is quite remarkable that there are 18 confessions in the Republic. It follows from this that about 95% of all confessions in the country, to some extent, carry out their religious activities on the territory of our city.')}}</p>
</p>
                <a href="{{route('main-site.pages.verification')}}" class="read-more">{{__('lang.Submit your application')}}</a>
            </div>
        </div>
    </div>
</div>

<div class="project-support">
    <div class="wrapper">
        <h2>{{__('lang.Project support')}}</h2>
        <div class="text">
            <h4>{{__('lang.Department of Religious Affairs of Almaty city')}}</h4>

<p>{{__('lang.It is important for us that you receive only up-to-date data, therefore, if you see incorrect data, or an object that is missing in the database, please contact us, and our specialists will contact you and check the accuracy of the data or identify a new object.')}}</p>
        </div>
        <a href="#" target="_blank" class="read-more">{{__('lang.More')}}</a>
    </div>
</div>


@endsection

@push('scripts')
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-85370743-3', 'auto');
    ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45703692 = new Ya.Metrika({
                    id:45703692,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45703692" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- ZERO.kz -->
<span id="_zero_72040">
  <noscript>
    <a href="http://zero.kz/?s=72040" target="_blank">
      <img src="http://c.zero.kz/z.png?u=72040" width="88" height="31" alt="ZERO.kz" />
    </a>
  </noscript>
</span>

<script type="text/javascript"><!--
  var zero_kz = zero_kz || [];
  zero_kz.push(["id", 72040]);
  // Цвет кнопки
  zero_kz.push(["type", 1]);
  // Проверять url каждые 200 мс, при изменении перегружать код счётчика
  // zero_kz.push(["url_watcher", 200]);

  (function () {
    var a = document.getElementsByTagName("script")[0],
    s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = (document.location.protocol == "https:" ? "https:" : "http:")
    + "//c.zero.kz/z.js";
    a.parentNode.insertBefore(s, a);
  })(); //-->
</script>
@endpush


