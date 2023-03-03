@extends('admin.layouts.app')

@section('title')
    <title>Show | Pakistantop</title>
@endsection
@push('styles')
@endpush

@section('content')
    <div class="app-content">
        <div class="side-app">

            <div class="page-header">
                <h4 class="page-title">Video Show </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Video Show</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Show</li> --}}
                </ol>

            </div>
            <div class="card">
                @include('error.error')

                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="table-responsive table">
                                <table>
                                    <tbody>

                                        <tr>
                                            <th><strong>TITLE</strong></th>
                                            <th> {{ $video->title }}</th>
                                        </tr>
                                        <tr>
                                            <th><strong>Youtube Embeded Link</strong> </th>
                                            <td>
                                            <video href="{{$video->video_url}}" type="youtube"></video>


                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>



                    @endsection
                    @push('scripts')

                        <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
                    @endpush
