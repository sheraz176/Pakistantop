@extends('main-site.layouts.app')

@section('title')
    <title>Leader Details | Religionmap </title>
@endsection
@section('content')
<div class="page-header small-page-header">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a href="">Главная</a>
            <span>></span>
            <a href="">Руководители религиозных организаций</a>
            <span>></span>
            <a href="">Абдраманов Ержан  Усенханович</a>
        </div>
    </div>
</div>


<div class="object-detailed">
    <div class="wrapper">
        <div class="cols">
            <div class="col-70">
                <h2>{{$leader->address}} </h2>
                <div class="page-text no-margin">
                    <p>{!! $leader->description!!} <p>

                </div>
            </div>
            <div class="col-30">
                                        <img class="photo rounded" src="{{!empty($place->image)? Storage::url($place->image):'https://us.123rf.com/450wm/happyvector071/happyvector0711904/happyvector071190414608/happyvector071190414608.jpg?ver=6'}}" alt="" draggable="false" />
                                                        <p class="o-confession">
             <img src="{{!empty($place->confession->icon_id)?$place->confession->icon->url:'https://www.clipartmax.com/png/middle/294-2942811_address-comments-white-address-icon-png.png'}}" alt="" draggable="false" />
             <b>{{$place->confession->title}}</b>
                </p>
                                    <p class="o-row o-contacts">{{$leader->email}}</p>
                <p><a href="{{route('main-site.home.index')}}">Назад к лидерам</a></p>
                <h3>объект</h3>
                <div class="leader-object">
                 <a href="#">
                 <img class="photo" src="{{ Storage::url($leader->image) }}" alt="" draggable="false" />
             <p class="o-confession">
                <img src="{{ Storage::url($leader->icon) }}" alt="" draggable="false" />
                <b>{{$place->confession->title}}</b>
                </p>
             <p class="o-name">{{$leader->name}}</p>
                <p class="o-address">{{$leader->address}}</p>
                    </a>
            </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')

@endpush

















