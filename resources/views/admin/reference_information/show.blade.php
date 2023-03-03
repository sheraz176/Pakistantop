@extends('admin.layouts.app')

@section('title')
    <title>Show | Religionmap</title>
@endsection
@push('styles')
@endpush

@section('content')
    <div class="app-content">
        <div class="side-app">

            <div class="page-header">
                <h4 class="page-title">Uploaded </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Uploaded</a></li>
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
                                            <th><strong>Title</strong></th>
                                            <th> {{ $reference_information->reference_title }}</th>
                                        </tr>
                                        <tr>
                                            <th><strong>Descripition</strong></th>
                                            <th> {!! $reference_information->reference_descripition !!}</th>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>



                    @endsection
                    @push('scripts')

                        <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
                    @endpush
