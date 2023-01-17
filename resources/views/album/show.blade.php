@extends('album.layouts.app')
@section('home', '/albums')
@section('title', 'Albums')
@section('subtitle', 'Albums')

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
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $album->name }}</td>
                        </tr>
                        <tr>
                            <td>Pictures</td>
                            <td><div class="d-flex">
                                @foreach ($images as $image)
                                <div>
                                    <img src="images/{{ $image->path }}" /> <p>{{ $image->name }}</p>
                                </div>
                                        @endforeach
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
