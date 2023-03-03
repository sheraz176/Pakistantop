
@extends('admin.layouts.app')

@section('title')
    <title>Video List | Pakistantop</title>
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
                <h4 class="page-title">Video List</h4>
                <ol class="breadcrumb">


                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Video</li>
                </ol>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-success btn-sm" ><a Style="color:white;" href="{{ route('admin.video.create') }}">Create Video</a></button>

                        </div>
                        <div class="card-body">
                            <div id="dt-table" class="table-responsive">
                                <table id="example" class="data-table table table-striped table-bordered quotation-table">
                                    <thead>
                                        <tr>

                                            <th class="wd-15p">ID</th>
                                            <th class="wd-20p">Title</th>
                                            <th class="wd-25p">action</th>
                                        </tr>
                                        @foreach ($videos as $key =>$video)
                                        <tr>

                                            <td>{{ $key + 1 }}</td>
                                          <td>{{ $video->title }}</td>
                                          <td>
                                            <a class="btn btn-success btn-sm text-white"  href="{{ route('admin.video.edit',$video->id) }}" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-primary btn-sm text-white mb-1"  href="{{ route('admin.video.show',$video->id) }}" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                            <form action="{{ route('admin.video.destroy',$video->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button class="btn btn-danger btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Delete" type="submit"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                        </td>

                                        </tr>
                                        @endforeach

                                    </thead>

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
     <!-- Data tables -->
     <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

@endsection

@push('scripts')
<script>
$('.data-table').DataTable();
</script>
@endpush









