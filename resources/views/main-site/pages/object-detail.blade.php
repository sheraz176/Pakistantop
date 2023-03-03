@extends('main-site.layouts.app')

@section('title')
    <title>{{ $place->title }} | {{ __('lang.Religionmap') }}</title>
@endsection
@section('content')
    <div class="page-header small-page-header">
        <div class="wrapper">
            <div class="breadcrumbs">
                <a href="{{ route('main-site.home.index') }}">{{ __('lang.home') }}</a>
                <span>></span>
                <a href="#">{{ $place->title }}</a>
            </div>
        </div>
    </div>
<input type="hidden" id="lat" value="{{$place->lat}}">
<input type="hidden" id="lng" value="{{$place->lng}}">
    <div class="object-detailed">
        <div class="wrapper">
            <div class="cols">
                <div class="col-70">
                    <h2>{{$place->title}}</h2>
                    <div class="page-text no-margin">
                        {!! $place->description !!}
                    </div>
                </div>
                <div class="col-30">
                    <img class="photo " src="{{!empty($place->image)? Storage::url($place->image):'https://us.123rf.com/450wm/happyvector071/happyvector0711904/happyvector071190414608/happyvector071190414608.jpg?ver=6'}}" alt="" draggable="false" />
                    <p class="o-confession">
                        <img src="{{!empty($place->confession->icon_id)?$place->confession->icon->url:'https://www.clipartmax.com/png/middle/294-2942811_address-comments-white-address-icon-png.png'}}" alt="" draggable="false" />
                        <b>{{$place->confession->title}}</b>
                    </p>
                    <p class=" o-confession">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxnywiSYEV3x92qQzM4skOSGBopConHY6yWAYFcnh7CUHV0NqBZwxhaGM13W69wdK4P6E&usqp=CAU" alt="" draggable="false" />
                        {{$place->map_area_name}}
                    </p>
                    <p><a href="#map-div">On the Map</a></p>

                    <p class=" o-confession">
                        <img src="https://cdn1.iconfinder.com/data/icons/color-bold-style/21/41-512.png" alt="" draggable="false" />
                        {{$place->email}}
                    </p>

                    <p class=" o-confession">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFx6c8gNlYd0YVPMgpIArTbN4pnXQLBLhOw&usqp=CAU" alt="" draggable="false" />
                        {{$place->phone_no}}
                    </p>
                    @if($leader != null)
                     <h3>объект</h3>
                    <div class="leader-object">
                        <a href=" {{route('leader.leaderdetail',$leader->id)}}">
                            <img class="photo" src="{{ Storage::url($leader->image) }}" alt="" draggable="false" />
                            <p class="o-confession">
                                <img src="{{ Storage::url($leader->icon) }}" alt="" draggable="false" />
                                <b>{{$place->confession->title}}</b>
                            </p>
                            <p class="o-name">{{$leader->name}}</p>
                            <p class="o-address">{{$leader->address}}</p>
                        </a>
                    </div>
                    @else

                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="row" id="map-div">
        <div class="col-md-12">
            <div class="address-map" id="map-view" style="width:100%;height:400px;">
        </div>
    </div>
@endsection

@push('scripts')

<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US"
type="text/javascript"></script>

<script>

var lat_ = $('#lat').val();
var lng_ = $('#lng').val();
var religion_icon="{{!empty($place->confession->icon_id) ? $place->confession->icon->url:'https://www.clipartmax.com/png/middle/294-2942811_address-comments-white-address-icon-png.png'}}";

ymaps.ready(init);

function init() {
var placemark = new ymaps.Placemark([lat_, lng_],  {
        iconCaption: 'Location'
    }, {
        iconLayout:"default#image",
        iconImageHref: religion_icon,
        iconImageSize:[30, 42],
      // Setting the placemark style (circle).
        // preset: 'islands#icon',
        // iconColor: 'red',
        // weight: 12,
    });
    var myMap = new ymaps.Map('map-view', {
        center: [42.340782, 69.596329],
        zoom: 9
    }, {
        searchControlProvider: 'yandex#search'
    });
    myMap.geoObjects.add(placemark);

// Creating a placemark
function createPlacemark(coords) {
    return new ymaps.Placemark(coords, {
        iconCaption: 'searching...'
    }, {
        preset: 'islands#violetDotIconWithCaption',
        draggable: true
    });
}

// Determining the address by coordinates (reverse geocoding).
function getAddress(coords) {
    myPlacemark.properties.set('iconCaption', 'searching...');
    ymaps.geocode(coords).then(function(res) {
        var firstGeoObject = res.geoObjects.get(0);

        myPlacemark.properties
            .set({
                // Forming a string with the object's data.
                iconCaption: [
                    // The name of the municipality or the higher territorial-administrative formation.
                    firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() :
                    firstGeoObject.getAdministrativeAreas(),
                    // Getting the path to the toponym; if the method returns null, then requesting the name of the building.
                    firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                ].filter(Boolean).join(', '),
                // Specifying a string with the address of the object as the balloon content.
                balloonContent: firstGeoObject.getAddressLine()
            });

        // console.log('firstGeoObject',firstGeoObject['geometry']['_coordinates']);
        $('#lat').val(firstGeoObject['geometry']['_coordinates']['0']);
        $('#lng').val(firstGeoObject['geometry']['_coordinates']['1']);
        $('#map_name').val(firstGeoObject.getAddressLine());

    });
}
}
</script>
@endpush
