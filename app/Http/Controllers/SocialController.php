<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = DB::table('socials')
            ->select('socials.*')
            ->get();
        return view('admin.social', compact('socials'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        $socials = DB::table('socials')
            ->select('socials.*')
            ->get();
        return view('admin.social_edit', compact('socials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social, $id)
    {
        $social = Social::where('id',$id)->first();
        $social->linkedin = $request->linkedin;
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->twitter = $request->twitter;

//        dd($profile);

        $social->save();

        return redirect('admin_side/social')->with('success',"Sosial Media telah diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
    }
}
