@extends('album.layouts.app')
@section('title', 'Albums')
@section('subtitle', 'Albums')

@section('button_create')
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('albums.create') }}" type="button" class="btn btn-primary">+</a>
        </div>
    </div>
@stop
@section('content')
    <h6 class="mb-0 text-uppercase">Albums</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="mt-2">
                @include('album.layouts.messages')
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            {{-- <th>Pictures</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($n = 1)
                        @foreach ($albums as $album)
                            <tr>
                                <td>{{ $n++ }}</td>
                                <td>{{ $album->name }}</td>
                                {{-- <td>{{ $album->short_name }}</td> --}}
                                {{-- <td>{{ $currency->symbol }}</td> --}}
                                <td>
                                    <a href="{{ route('image_page', $album->id) }}" class="btn btn-info">Insert Images</a>
                                    <a href="{{ route('albums.show', $album->id) }}" class="btn btn-success">Show</a>
                                    <form action='{{ route('albums.destroy', $album->id) }}' class='d-inline'
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you delete?')"
                                        class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('delete_or_move', $album->id) }}" class="btn btn-warning">DeleteAll or MoveAll Pic</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
