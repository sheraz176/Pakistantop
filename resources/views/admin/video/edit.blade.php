@extends('admin.layouts.app')

@section('title')
    <title>Edit | Pakistantop</title>
@endsection
@push('styles')
@endpush

@section('content')
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Video</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Video</li>
            </ol>
        </div>
        		<!-- end row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Edit Video</h3>

									</div>
									<div class="card-body">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('admin.video.update',[$video->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

											<div class="form-row">
												<div class="form-group col-md-6">
													<div class="form-group">
														<label class="form-label" for="exampleInputEmail1">Title</label>
														<input type="text" class="form-control" name="title" value="{{ $video->title }}">
													</div>
												</div>
                                                <div class="form-group col-md-6">
													<div class="form-group">
														<label class="form-label" for="exampleInputEmail1">Youtube Embeded Link</label>
														<input type="text" class="form-control" name="video_url" value="{{ $video->video_url }}">
													</div>
												</div>




											</div>




											</div>

											<button type="submit" class="btn btn-primary ">Submit</button>
										</form>
									</div>
								</div>
							</div>
						</div>
    </div>
</div>
    @endsection
