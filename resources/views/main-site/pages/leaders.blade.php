@extends('main-site.layouts.app')

@section('title')
    <title>{{__('lang.Regulations')}} | {{__('lang.Religionmap')}}</title>
@endsection
@section('content')

<div class="missioners-list">
    <div class="wrapper">
        <div class="list">
            @foreach ($leaders as $key => $leader)
            <a href="{{route('leader.leaderdetail',$leader->id)}}" class="element">
                <span class="photo">
                    <img class="photo" src="{{ Storage::url($leader->image) }}" alt="" draggable="false" />
                </span>
                <span class="full-name">{{$leader->name}}</span>
            </a>
       @endforeach

        </div>
        <div class="pagination">


            {{ $leaders->links('main-site.pages.partials.news-pagination') }}
        </div>
    </div>
</div>



@endsection

@push('scripts')

@endpush
