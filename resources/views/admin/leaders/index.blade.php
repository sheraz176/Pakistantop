

@extends('admin.layouts.app')

@section('title')
    <title>Leader List | Religionmap</title>
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
                <h4 class="page-title">Leader List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leader List</li>
                </ol>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">

                                @if($leader != null)
                                      @else
                     <button type="button" class="btn btn-success btn-sm" ><a Style="color:white;" href="{{ route('admin.leader.create',$place->id) }}">Create</a></button>
                                      @endif



                        </div>
                        <div class="card-body">
                            <div id="dt-table" class="table-responsive">
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>ID </th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>Address</th>
                                            <th width="100px">Action</th>
                                        </tr>

                                        @if($leader != null)
                                        <td>{{$leader->id}}</td>
                                        <td>{{$leader->name}}</td>
                                        <td>{{$leader->email}}</td>
                                        <td>{{$leader->address}}</td>
                                        <td>
                                            {{-- <a class="btn btn-success btn-sm text-white"  href="" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a> --}}
                                            <a class="btn btn-danger btn-sm text-white mb-1"  href="{{ route('admin.leader.destroy',$leader->id) }}" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                            {{-- <a class="btn btn-primary btn-sm text-white mb-1"  href="" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> --}}
                                        </td>
                                        @else

                                        @endif


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


     <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

@endsection

@push('scripts')
<script src="{{ asset('admin/assets/js/index3.js') }}"></script>
{{--
<script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({

          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.leader.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script> --}}

    <!-- Data tables -->
    <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

@endpush
