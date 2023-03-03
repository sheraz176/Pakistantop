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
                                            <th><strong>Name</strong></th>
                                            <th> {{ $leave_request_verification->full_name }}</th>
                                        </tr>
                                        <tr>
                                            <th><strong>Email</strong></th>
                                            <th> {{ $leave_request_verification->email }}</th>
                                        </tr>
                                        <tr>
                                            <th><strong>Address</strong></th>
                                            <th> {{ $leave_request_verification->map_object }}</th>
                                        </tr>


                                        <tr>
                                            <th><strong>Message</strong> </th>
                                            <th>{!! $leave_request_verification->message !!}</th>
                                        </tr>
                                        <tr>
                                            <th><strong>Attach File </strong></th>
                                            <th>
                                                <a target="_blank" href="{{ Storage::url($leave_request_verification->file) }}">
                                                     <button class="btn btn-primary waves-effect waves-light">Show</button></a></th>
                                        </tr>

                                        {{-- <li class="item docx">
                                            <a target="_blank" href="{{ Storage::url($leave_request_verification->file) }}">Open Attechments</a>
                                        </li> --}}



                                    </tbody>
                                </table>
                            </div>
                        </div>



                    @endsection
                    @push('scripts')

                        <script src="{{ asset('admin/assets/js/index3.js') }}"></script>
                    @endpush
