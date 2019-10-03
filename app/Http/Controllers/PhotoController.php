<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Intervention\Image\Facades\Image;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cafe.photo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('picture')
        //                 ->store('pic');
        Storage::disk('local')
            ->putFileAs('test',$request->file('picture'),'1.png');

            $file = Storage::disk('local')
                  ->path('test/1.png');

            $new_file = Storage::disk('local')
                            ->path('test/1-300×300.png');

            $image = Image::make($file)
                        ->resize(300,300)
                        ->save($new_file);
    }
                    //    file('picture') のファイル名はphoto.blade.phpのnameの名前
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    
}


