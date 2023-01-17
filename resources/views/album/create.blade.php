@extends('album.layouts.app')
@section('home', '/albums')
@section('title', 'Albums')
@section('subtitle', 'Create Album')
@section('content')
<div class="row">
    <div class="col-xl-7 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">Create Album</h5>
                </div>
                <hr>
                <form class="row g-3" action="{{ route('albums.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputFirstName" class="form-label">Name</label>
                        <input type="test" name = 'name' class="form-control" id="inputFirstName">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Create Album</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
@stop

