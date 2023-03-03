@extends('main-site.layouts.app')

@section('title')
    <title>{{ __('lang.index') }} | {{ __('lang.Religionmap') }}</title>
@endsection
@push('styles')
<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US" type="text/javascript"></script>

<style>
    html, body, #map {
        width: 100%; height: 100%; padding: 0; margin: 0;
    }
    a {
        color: #04b; /* Link color */
        text-decoration: none; /* Removing uderline from links */
    }
    a:visited {
        color: #04b; /* Visited link color */
    }
    a:hover {
        color: #f50000; /* Link color when hovering */
    }
</style>
@endpush
@section('content')
    <div class="religion-map">
        <div class="wrapper">
            <h2 class="white">{{ __('lang.Religious card') }}</h2>
            <p>{{ __('lang.A service that allows you to find and learn more information about the religious sites of the city of Almaty') }}
            </p>
            <a href="{{ route('main-site.pages.religiouscard') }}" class="read-more white">{{ __('lang.More') }}</a>
            <img src="images/map-img.png" alt="">
            <div class="panel">
                <div class="url-carousel owl-carousel owl-theme">
                    <a href="#" class="url icon-1">{{ __('lang.Religious buildings with detailed information') }}</a>
                    <a href="#" class="url icon-2">{{ __('lang.Official list of confessions') }}</a>
                    <a href="#"
                        class="url icon-3">{{ __('lang.Database of religious premises for various purposes') }}</a>
                    <a href="#" class="url icon-4">{{ __('lang.Leaders of religious organizations') }}</a>
                    <a href="#" class="url icon-4">{{ __('lang.Missionaries and their activities in Almaty') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="filter">
            <div class="wrapper">
                <form action="#" class="map-filter">
                    <select name="confession_id" id="confession_id" onchange="confession()">
                        <option value="">{{ __('lang.confession') }}</option>
                        @foreach ($religions as $religion)
                            <option value="{{ $religion->id }}">{{ $religion->title }}</option>
                        @endforeach
                    </select>
                    <select name="type" id="building_type" onchange="building_types()">
                        <option value="">{{ __('lang.Type of') }}
                        <option value="religious_building">{{ __('lang.religious building') }}</option>
                        <option value="literature_and_paraphernalia">
                            {{ __('lang.Places of sale of religious literature and paraphernalia') }}</option>
                        <option value="prayer_room">{{ __('lang.prayer room') }}</option>

                    </select>
                    <select name="region_id" id="area_type" onchange="area_typs()">
                        <option value="">{{ __('lang.Area') }}</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                    <input class="search" id="custom-search" autocomplete="off" name="keyword" type="text"
                        placeholder="{{ __('lang.Search') }}" />
                    {{-- <input class="hidden" type="submit" value="" /> --}}
                </form>
                <a href="#" class="view-type on-map">{{ __('lang.list') }}</a>
                <a href="#" class="view-type list">{{ __('lang.On the map') }}</a>
                <div class="hint-1">
                    {{ __('lang.Use a simple filter and easily search for religious objects in the city of Almaty') }}
                </div>
            </div>
        </div>
        <div class="map-cont">
            <div class="address-map" id="map-view"></div>

            <div class="wrapper">
                <a href="#" class="goto">{{ __('lang.Go to section') }}</a>
            </div>
        </div>
        <div class="wrapper">
            <div class="hint-2">
                {{ __('lang.Go to the detailed section and get acquainted with all the officially registered confessions of the city of Almaty') }}
            </div>
        </div>
    </div>

    <div class="reliable-info">
        <div class="wrapper">
            <div class="info-block">
                <div class="col"></div>
                <div class="col">
                    <h2>{{ __('lang.Reliable information') }}</h2>
                    <p>{{ __('lang.It is important for us that you receive only up-to-date data, therefore, if you see incorrect data, or an object that is missing in the database, please contact us, and our specialists will contact you and check the accuracy of the data or identify a new object.') }}
                    </p>
                    <a href="{{ route('main-site.pages.verification') }}"
                        class="read-more">{{ __('lang.Submit your application') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="religion-society">
        <div class="wrapper">
            <h2>{{ __('lang.Religion and society') }}</h2>
            <div class="statement">
                <p>{{ __('lang.Diversity is not a disadvantage, on the contrary, it is the most invaluable gift of God, thanks to which real mutual enrichment, true development takes place. Each nation has unique traditions, history, and way of thinking that are unique to it. Everyone contributes his own special melody to the polyphony of the culture of mankind') }}
                </p>
                <div class="author">
                    {{ __('lang.Speech by the First President of the Republic of Kazakhstan N.A. Nazarbayev at the closing of the I Congress of Leaders of World and Traditional Religions') }}
                </div>
                <img src="images/religions.png" draggable="false" alt="">
            </div>
            <div class="religions-list">
                <div>
                    <a class="i1" href="{{ route('main-site.pages.religionandsocity') }}">
                        <i style="background: url(images/9jnbabml4k08okgcosos.svg) no-repeat center"></i>
                        {{ __('lang.Islam') }} </a>
                </div>
                <div>
                    <a class="i1" href="{{ route('main-site.pages.religionandsocity') }}">
                        <i style="background: url(images/tvseir06gn440cs4w08o.svg) no-repeat center"></i>
                        {{ __('lang.Christianity') }} </a>
                </div>
                <div>
                    <a class="i1" href="{{ route('main-site.pages.religionandsocity') }}">
                        <i style="background: url(images/84xyw8ffnl8owswwksws.svg) no-repeat center"></i>
                        {{ __('lang.Buddhism') }} </a>
                </div>
                <div>
                    <a class="i1" href="{{ route('main-site.pages.religionandsocity') }}">
                        <i style="background: url(images/gsoil6frwj4s0wswg8wk.svg) no-repeat center"></i>
                        {{ __('lang.Jewish religion') }} </a>
                </div>
                <div>
                    <a class="i1" href="{{ route('main-site.pages.religionandsocity') }}">
                        <i style="background: url(images/5q4np2ak684ko0g8cww4.svg) no-repeat center"></i>
                        {{ __('lang.New religions') }} </a>
                </div>
            </div>
            <a href="{{ route('main-site.pages.religionandsocity') }}" class="read-more">{{ __('lang.More') }}</a>
        </div>
    </div>

    <div class="regulations">
        <div class="wrapper">
            <h2>{{ __('lang.Regulations') }}</h2>
            <div class="list">
                <ul class="col">
                    @foreach ($Regulations as $key => $regulations)
                        <li class="item docx">
                            <a target="_blank" href="{{ Storage::url($regulations->file) }}">{{ $regulations->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="{{ route('main-site.pages.regulations') }}" class="read-more">{{ __('lang.More') }}</a>
        </div>
    </div>

    <div class="news">
        <div class="wrapper">
            <h2>{{ __('lang.News') }}</h2>
            <div class="carousel">
                @foreach ($News as $key => $news)
                    <a href="{{ route('main-site.pages.news-details', $news->id) }}" class="element">
                        <div class="photo">
                            <img src="{{ Storage::url($news->image) }}" alt="" draggable="false">
                        </div>
                        <div class="info">
                            <p>{{ $news->created_at }}</p>
                            <span>{{ $news->news_title }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{ route('main-site.pages.news') }}" class="read-more">{{ __('lang.All news') }}</a>
        </div>
    </div>

    <div class="video">
        <div class="wrapper">
            <div class="cols">
                <div class="col">
                    <h2>{{ __('lang.Video') }}</h2>
                    <h4>{{ __('lang.Extremism.') }} <br />{{ __('lang.Battle for soul and mind.') }}</h4>
                    <p>{{ __('lang.Suddenly, interactive prototypes are locked within their own rational limits. In the same way, the high quality of positional research creates the preconditions for the directions of progressive development.') }}
                    </p>
                    <a href="{{ route('main-site.pages.video') }}" class="read-more">Все видео</a>
                </div>
                <div class="col">
                    <div class="pigeon">
                        <img src="images/video.svg" class="only-mobile" alt="">
                        <a class="modal-link watch" data-url="/ru/watch/5" data-class="video"></a>
                    </div>
                    <a href="{{ route('main-site.pages.video') }}"
                        class="read-more only-mobile">{{ __('lang.All video') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


<script>

function building_types()
{
   init();
}
function area_typs()
{
   init();

}
function confession()
{
   init();

}

$('#custom-search').keyup(function(event){
    init();

 });

// function init () {
//     $('#map-view').html(null);
//     var myMap = new ymaps.Map('map-view', {
//             center: [42.340782, 69.596329],
//             zoom: 15
//         }, {
//             searchControlProvider: 'yandex#search'
//         }),
//         objectManager = new ymaps.ObjectManager({
//             clusterize: true
//         });

//     myMap.geoObjects.add(objectManager);


//     $.ajax({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//             url: "{{route('map.placemarks')}}",
//             type: 'get',
//             data: {
//                 confession_id: $('#confession_id').find(":selected").val(),
//               area_type: $('#area_type').find(":selected").val(),
//               building_id: $('#building_type').find(":selected").val(),
//             },
//             dataType: 'json',
//             success: function (data) {
//                 objectManager.add(data);
//                 console.log('data',data);
//         // Opening the balloon on the placemark with id == 1.
//                 var objectState = objectManager.getObjectState(1);
//                 console.log('objectState',objectState);
//                 if (objectState.isClustered) {
//                     // Making sure that the specified object has been "selected" in the balloon.
//                     objectManager.clusters.state.set('activeObject', objectManager.objects.getById(1));
//                     /**
//                      * All the generated clusters have unique identifiers.
//                      * This identifier must be passed to the balloon manager to specify
//                      * which cluster to show the balloon on.
//                      */
//                     objectManager.clusters.balloon.open(objectState.cluster.id);
//                 } else {
//                     objectManager.objects.balloon.open(1);
//                 }
//             }
//         });

// }

ymaps.ready(init);

function init () {
    $('#map-view').html(null);
    var myMap = new ymaps.Map('map-view', {
        center: [42.340782, 69.596329],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager();

    myMap.geoObjects.add(objectManager);

    // $.ajax({
    //     // The data.json file describes geometry, options and contents of placemarks.
    //     url: "data.json"
    // }).done(function(data) {
    //     objectManager.add(data);
    // });

    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('map.placemarks')}}",
            type: 'get',
            data: {
                confession_id: $('#confession_id').find(":selected").val(),
              area_type: $('#area_type').find(":selected").val(),
              building_id: $('#building_type').find(":selected").val(),
              search:$('#custom-search').val(),
            },
            dataType: 'json',
            success: function (data) {
                console.log('data',data);
                objectManager.add(data);

            }
            });

}









</script>
@endpush
