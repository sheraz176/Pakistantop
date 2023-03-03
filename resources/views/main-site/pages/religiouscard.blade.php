@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Religious card')}} | {{__('lang.Religionmap')}}</title>
@endsection
@push('styles')
<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US" type="text/javascript"></script>

@endpush
@section('content')



<div class="page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a  href="{{route('main-site.home.index')}}">{{__('lang.home')}}</a>
            <span>></span>
            <a href="#">{{__('lang.Religious card')}}</a>
        </div>
        <h2 class="white">{{__('lang.Religious card')}}</h2>
        <p class="white">{{__('lang.A service that allows you to find and learn more information about the religious sites of the city of Almaty')}}</p>
        <img src="images/map-img.png" alt="" draggable="false">
    </div>
</div>

<div class="map no-margin">
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
                <input class="search" autocomplete="off" id="custom-search" name="keyword" type="text" placeholder="{{__('lang.Search')}}" />
                {{-- <input class="hidden" type="submit" value="" />/ --}}
            </form>
            <a href="#" class="view-type on-map">{{__('lang.list')}}</a>
            <a href="#" class="view-type list">{{__('lang.On the map')}}</a>
            <div class="hint-1">
                {{__('lang.Use a simple filter and easily search for religious objects in the city of Almaty')}} </div>
        </div>
    </div>
    <div class="map-cont">
        <div class="objects-map" id="map-view" data-lon="43.28368693951529" data-lat="76.91755036588391"></div>
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

