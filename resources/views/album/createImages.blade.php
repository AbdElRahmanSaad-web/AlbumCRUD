@extends('album.layouts.app')
@section('home', '/albums')
@section('title', 'Albums')
@section('subtitle', 'Insert Images')

@section('content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('uploadImages', $id) }}" enctype="multipart/form-data">
                        {{-- class="dropzone" id="dropzone" name="image"> --}}
                        @csrf
                        <input type="file" class="form-controll" name="image">
                        <input type="text" name="name">
                        <input type="submit" class="form-controll" value="upload" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        };
    </script>
@stop
