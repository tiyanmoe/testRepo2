<?php

namespace App\Http\Controllers;

use App\Models\Vite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = DB::table('profiles')
            ->select('profiles.*')
            ->get();
        $socials = DB::table('socials')
            ->select('socials.*')
            ->get();
        $educations = DB::table('educations')
            ->select('educations.*')
            ->get();
        return view('vite.index', compact('profiles', 'socials', 'educations'));
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
     * @param  \App\Models\Vite  $vite
     * @return \Illuminate\Http\Response
     */
    public function show(Vite $vite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vite  $vite
     * @return \Illuminate\Http\Response
     */
    public function edit(Vite $vite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vite  $vite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vite $vite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vite  $vite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vite $vite)
    {
        //
    }
}
