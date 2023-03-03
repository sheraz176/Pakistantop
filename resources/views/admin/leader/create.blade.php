@extends('admin.layouts.app')

@section('title')
    <title>Create | Religionmap</title>
@endsection
@push('styles')
<!-- WYSIWYG Editor css -->
<link href="{{ asset('admin/assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="app-content">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Place</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Create</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.places.index') }}">Back</a>
                    </li>
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
                                <div class="card-title">Create Place</div>
                            </div>

                            <form action="{{ route('admin.places.store') }}" method="POST" id="place-form"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="lat" id="lat">
                                <input type="hidden" name="lng" id="lng">
                                <input type="hidden" name="map_name" id="map_name">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Enter Title  <span style="color: red">*</span></label>
                                                <input type="text" class="form-control w-100" name="title" id="title"
                                                    placeholder="Enter title here" required>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control w-100" name="phone_no" id="phone_no"
                                                    placeholder="Enter phone no here" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control w-100" name="email" id="email"
                                                    placeholder="Enter email here" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Image <span style="color: red">*</span></label>
                                                <input type="file" accept="image/png, image/jpeg,image/jpg" class="form-control w-100" name="image" id="image"
                                                    placeholder="Enter image here" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Confession Type  <span style="color: red">*</span> </label>
                                               <select  class="form-control" name="confession_type" id="confession_type" required>
                                                <option value="">Confession</option>

                                                @foreach ($religions as $religion)
                                                <option value="{{$religion->id}}">{{$religion->title}}</option>
                                                @endforeach
                                               </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Religious Building Type  <span style="color: red">*</span> </label>
                                               <select  class="form-control" name="building_type" id="building_type" required>
                                                <option value="">type of</option>
                                                <option value="religious_building">religious building</option>
                                                <option value="literature_and_paraphernalia">Places of sale of religious literature and paraphernalia</option>
                                                <option value="prayer_room">prayer room</option>
                                               </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label">Area Type  <span style="color: red">*</span> </label>
                                               <select  class="form-control" name="area_type" id="area_type" required>
                                                <option value="">Area</option>

                                                @foreach ($areas as $area)
                                                <option value="{{$area->id}}">{{$area->name}}</option>
                                                @endforeach
                                               </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="content" name="description" placeholder="Enter Description" id="description"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Select Location  <span style="color: red">*</span></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="address-map" id="map-view" style="width:100%;height:400px;">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-footer">
                                    <span class="btn btn-primary waves-effect waves-light" onclick="submit()">Save</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            @endsection


            @push('scripts')
                {{-- <script src="{{asset('js/map.js')}}"></script> --}}
                <script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US"
                    type="text/javascript"></script>

                <script>
                    ymaps.ready(init);

                    function init() {
                        var myPlacemark,
                            myMap = new ymaps.Map('map-view', {
                                center: [55.753994, 37.622093],
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
                                $('#lng').val(firstGeoObject['geometry']['_coordinates']['1']);
                                $('#map_name').val(firstGeoObject.getAddressLine());

                            });
                        }
                    }
                </script>
                <script>
                    function submit() {
                        var lat = $('#lat').val();
                        var image = $('#image').val();
                        var title = $('#title').val();
                        var confession_type = $('#confession_type').val();
                        var area_type = $('#area_type').val();
                        var building_type = $('#building_type').val();
                        var lng = $('#lng').val();
                        var map_name = $('#map_name').val();
                        if (lat && lng && map_name && confession_type && image && area_type &&  building_type && title ) {
                            $('#place-form').submit();
                        } else {
                            alert('please fill required data !');
                        }
                    }
                </script>

                <!-- WYSIWYG Editor js -->
		<script src="{{asset('admin/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{asset('admin/assets/js/formeditor.js')}}"></script>
            @endpush
