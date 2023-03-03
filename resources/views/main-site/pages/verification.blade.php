@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Verification')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')


<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.Application for verification')}}</a>
        </div>
        <h2 class="white">{{__('lang.Application for verification')}}</h2>
        <p class="white">{{__('lang.Fill out the application and add new data to the map')}}</p>
        <img src="images/app-for-verification-img.png" alt="" draggable="false">
    </div>
</div>

    <form action="{{ route('main-site.pages.verifications') }}" method="POST" enctype="multipart/form-data" id="form-verification"
        class="app-form">
        @csrf
        <div class="app-for-verification">
            <div class="wrapper">
                <div class="verification-form">
                    <div class="col-50">
                        <h2>{{__('lang.Application form')}}</h2>
                    <p>{{__('lang.It is important for us that you receive only up-to-date data, therefore, if you see incorrect data, or an object that is missing in the database, please contact us, and our specialists will contact you and check the accuracy of the data or identify a new object.')}}</p>
                    </div>
                    <div class="col-50">
                        <input type="text"  placeholder="{{__('lang.Full name')}}" id="full_name" name="full_name" required>
                    <input type="text"  placeholder="{{__('lang.Email')}}" id="email" name="email" required>
                    <input type="hidden" id="address_name"   name="map_object"  required>
                    <textarea name="message" id="message" placeholder="{{__('lang.Message')}}"></textarea>
                        <div>
                            <label class="file-label" for="file">
                                {{__('lang.Select a file')}} <input class="file-input" id="file" type="file" name="file" required>
                                <span class="file-name"></span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="hint-1">{{__('lang.Add new data to the map by clicking on the desired object')}}</div>
            </div>
        </div>
        <input type="hidden" name="lat" id="lat" size=12>
        <input type="hidden" name="long" id="long" size=12>

        <div class="address-map" id="map-view" data-editable="1" data-zoom="13" required /></div>
        <br>
        <div style="margin-left: 45%;">
            <button  onclick="save()"  class="read-more">{{__('lang.Send')}}</button>
          </div>

    </form>



@endsection

@push('scripts')
<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US" type="text/javascript"></script>

  <script>

        ymaps.ready(init);

        function init() {
            var myPlacemark,
                myMap = new ymaps.Map('map-view', {
                    center: [42.340782, 69.596329],
                    zoom: 9
                }, {
                    searchControlProvider: 'yandex#search'
                });

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
                    $('#long').val(firstGeoObject['geometry']['_coordinates']['1']);
                    $('#address_name').val(firstGeoObject.getAddressLine());

                });
            }
        }
    </script>


     <script>
        function save()
        {

            $('#form-verification').submit();
            $('#full_name').val(null);
            $('#email').val(null);
            $('#file').val(null);
            $('#message').val(null);
            $('#lat').val(null);
            $('#long').val(null);



        }
    </script>




@endpush
