<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Photos;
use App\Evenements;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;

class PhotosController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $photos = DB::table('users')
            ->where('users.id', Auth::id())
            ->leftJoin('participation_evenement_user', 'participation_evenement_user.user_id', '=', 'users.id')
            ->leftJoin('evenements', 'evenements.id', '=', 'participation_evenement_user.evenements_id')
            ->leftJoin('photos', 'photos.evenements_id', '=', 'evenements.id')
            ->get();

        return view('Photos/picture')->withPhotos($photos);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgup = new Photos;

        $imgup->nom_photo = $request['nom_photo'];
        $imgup->url_photo = $request['url_photo'];
        $imgup->evenements_id = $request['evenements_id'];
       
        $imgup->save();
    }

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

    public function imageUpload()
        {
        return view('Photos/imageUpload');
    }

    public function imageUploadPost()
    {
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);



        return back()

            ->with('success','L\'image a bien été téléchargée !')

            ->with('image',$imageName);


    }
}
