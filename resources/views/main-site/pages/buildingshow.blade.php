@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.About')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')

<div class="objects-list">
    <div class="wrapper">
        <div class="list">

            @foreach ($buildings as $key => $building)

            <a href="{{route('object.detail',$building->id)}}" class="element">
                <div class="photo">
                    <img src="{{ Storage::url($building->image) }}" alt="" draggable="false">
                </div>
                <div class="info">

                    <span class="o-name">{{$building->title}}</span>
                    <span class="o-address">{{$building->map_area_name}}</span>
                </div>
            </a>
  @endforeach

        </div>
        <div class="pagination">
            {{ $buildings->links('main-site.pages.partials.news-pagination') }}
        </div>
    </div>
</div>





@endsection
@push('scripts')
@endpush
