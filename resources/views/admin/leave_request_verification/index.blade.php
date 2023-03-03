

@extends('admin.layouts.app')

@section('title')
    <title> List | Religionmap</title>
@endsection
@push('styles')
    <!-- Data table css -->
    <link href="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="app-content">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">List</h4>
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leave Request Verification </li>
                    {{-- <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.leave_request_verification.create') }}">Create</a></li> --}}
                </ol>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Leave Request Verification List</div>

                        </div>
                        <div class="card-body">
                            <div id="dt-table" class="table-responsive">
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Date</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table-wrapper -->
                    </div>
                    <!-- section-wrapper -->
                </div>

            </div>
        </div>
    </div>

    {{-- <td>
        <a class="btn btn-success btn-sm text-white"  href="{{ route('admin.news.edit',$news->id) }}" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-primary btn-sm text-white mb-1"  href="{{ route('admin.news.show',$news->id) }}" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
        <form action="{{ route('admin.news.destroy',$news->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Delete" type="submit"><i class="fa fa-trash-o"></i></button>
    </form>
    </td> --}}
     <!-- Data tables -->
     <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

@endsection

@push('scripts')
<script src="{{ asset('admin/assets/js/index3.js') }}"></script>

<script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.leave_request_verification.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'full_name', name: 'full_name'},
              {data: 'email', name: 'email'},
              {data: 'map_object', name: 'map_object'},
              {data: 'created_at', name: 'created_at'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>

    <!-- Data tables -->
    <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

@endpush
