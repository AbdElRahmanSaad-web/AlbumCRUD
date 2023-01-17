@extends('album.layouts.app')

@section('content')
<form action="{{ route('move_all', $album->id) }}" method="post">
    @csrf
    <select name="selected_album" id="selectAlbum" hidden>
        @foreach ($albums as $a)
            <option value="{{ $a->id }}">{{ $a->name }}</option>
        @endforeach
    </select>
    <input type="submit" class="btn btn-success" id="move_all" hidden value='Move All Pictures' />
</form>
<form action="{{ route('delete_all', $album->id) }}" id="del_all" class='d-inline'
    method="post">
    @csrf
    @method('delete')
    <button onclick="return confirm('Are you delete?')"
    class="btn btn-danger">Delete All Pictures</button>
</form>
    <button class="btn btn-success" id="move_all_btn">Move All Pictures</button>
@stop
@section('scripts')
<script>
    $("#move_all_btn").on('click', function(){
        $('#del_all').hide();
        $('#selectAlbum').prop('hidden', false);
        $('#move_all').prop('hidden', false);
        $("#move_all_btn").prop('hidden', true);
    })
</script>
@stop
