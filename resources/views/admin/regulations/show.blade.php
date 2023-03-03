@extends('admin.layouts.app')

@section('title')
    <title>Show | Pakistan top</title>
@endsection
@push('styles')
@endpush

@section('content')



    <div class="app-content">
        <div class="side-app">

            <div class="page-header">
                <h4 class="page-title"> Uploaded </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> Uploaded</a></li>
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

                                         <li class="item docx">
                                            <a target="_blank" href="{{ Storage::url($regulations->file) }}">{{ $regulations->title }}</a>
                                        </li>
                                        <li>
                                            <iframe src="{{ $regulations->link }}" frameborder="0"></iframe>

                                        </li>

                                    </tbody>
                                </table>
                            </div>
                        </div>




                    @endsection
                    @push('scripts')

                        <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
                    @endpush
