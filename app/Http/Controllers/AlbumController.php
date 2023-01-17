<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\DataTables\AlbumsDataTable;
use App\ImageUpload;
use App\Models\Picture;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AlbumsDataTable $albums)
    {
        $albums = Album::all();
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::create(['name' => $request->name]);
        return redirect()->route('albums.index')->with('success',"Upload Pictures Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::findOrFail($id);
        $images = Picture::where('album_id', $id)->get();
        return view('album.show', compact('album', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::findOrFail($id)->delete();
        return redirect()->route('albums.index')->with('success', 'Album is deleted Successfully');
    }


    public function ImagesPage($id){
        return view('album.createImages', compact('id'));

    }
    public function saveImages($album_id, Request $request){
        $image = $request->image;

        // dd($image->getClientOriginalName());
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        $imageUpload = new Picture();

        $imageUpload->name = $request->name;
        $imageUpload->path = $imageName;
        $imageUpload->album_id = $album_id;
        $imageUpload->save();
        return redirect()->route('albums.index')->with('success','image created Successfully');
    }


    public function deleteOrMove($id){
        $album = Album::findOrFail($id);
        $albums = Album::all();
        // dd($album->Picture);
        if($album->Picture ==[])
            return redirect()->route('albums.index')->with('success', 'Album is Empty');
        else
            return view('album.delete_or_move', compact('album', 'albums'));
    }

    public function deleteAll($id){
        $imgs = Picture::where('album_id', $id)->delete();
        // dd($imgs);
        // foreach($imgs as $img){
        //     $this->destroy($img->id);
        // }
        return redirect()->route('albums.index')->with('success', 'Album is Empty');
    }

    public function moveAll(Request $request, $id){
        Picture::where('album_id', $id)->update(['album_id' => $request->selected_album]);
        return redirect()->route('albums.index')->with('success', 'Move All Pictures Successfully');
    }
}
