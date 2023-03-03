@extends('admin.layouts.app')

@section('title')
    <title>Edit | Religionmap</title>
@endsection
@push('styles')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Job board Admin template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="bootstrap job board template, bootstrap job template"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">


    <!-- Sidemenu Css -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet" />


    <!-- Bootstrap Css -->
    <link href="../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/admin-custom.css" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- WYSIWYG Editor css -->
    <link href="../assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

    <!-- p-scroll bar css-->
    <link href="../assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="../assets/css/icons.css" rel="stylesheet"/>

    <!-- Color-Skins -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/color-skins/color-skins/color10.css" />
</head>



@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Area</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.area.index')}}">Back</a></li>
            </ol>
        </div>
        <div class="row row-cards">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Area</div>
                    </div>

                    <form action="{{ route('admin.area.update',[$area->id]) }}" method="POST" id="area-form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="lat"  value="{{$area->lat}}" id="lat">
                        <input type="hidden" name="lng"  value="{{$area->lng}}" id="lng">
                        <input type="hidden" name="map_name" id="map_name">
                    <div class="card-body">
                        <div class="form-group ">
                            <label class="form-label">Enter Name</label>
                            <input type="text" class="form-control w-100" name="name"  id="name" value="{{ $area->name }}">
                        </div>


                        <div class="form-group">
                            <label class="form-label">Select Location</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="address-map" id="map-view" style="width:100%;height:400px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-footer">
                        <span  class="btn btn-primary waves-effect waves-light" onclick="update()">Update</span>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection

    @push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US"
    type="text/javascript"></script>

<script>
   
var lat_ = $('#lat').val();
var lng_ = $('#lng').val();
   ymaps.ready(init);

function init() {
    var placemark = new ymaps.Placemark([lat_, lng_],  {
            iconCaption: 'Old Location'
        }, {
          // Setting the placemark style (circle).
            preset: 'islands#icon',
            iconColor: 'red',
            weight: 12,
        });
        var myPlacemark
        ,myMap = new ymaps.Map('map-view', {
            center: [55.753994, 37.622093],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        });
        myMap.geoObjects.add(placemark);


    // Listening for a click on the map
    myMap.events.add('click', function(e) {
        var coords = e.get('coords');


        // Moving the placemark if it was already created
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        // Otherwise, creating it.
        else {
           
            myPlacemark = createPlacemark(coords);
            myMap.geoObjects.add(myPlacemark);
            // Listening for the dragging end event on the placemark.
            myPlacemark.events.add('dragend', function() {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
        getAddress(coords);
    });

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
<script>
    function update() {
        var lat = $('#lat').val();
        var lng = $('#lng').val();
        var map_name = $('#map_name').val();
        var name = $('#name').val();
        if (lat && lng && map_name && name) {
            $('#area-form').submit();
        } else {
            alert('please fill form !');
        }
    }
</script>
    @endpush



