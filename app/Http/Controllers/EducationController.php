<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = DB::table('educations')
            ->select('educations.*')
            ->get();
        return view('admin.edu', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edu_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $edu = new Education;
        $edu->name = $request->name;
        $edu->year_start = $request->year_start;
        $edu->year_end = $request->year_end;
        $edu->grade = $request->grade;
        $edu->address = $request->address;
        $edu->descriptions = $request->descriptions;



        $edu->save();

        return redirect('/admin_side/edu')->with('success',"Education has been added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education, $id)
    {
        $educations = DB::table('educations')
            ->select('educations.*')
            ->where('educations.id','=', $id)
            ->get();
        return view('admin.edu_edit', compact('educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education, $id)
    {
        $edu = Education::where('id',$id)->first();

        if ($edu != null) {
            $edu->delete();
            return redirect('/admin_side/edu')->with('success',"Data has been deleted");
        }

        return redirect('/admin_side/edu')->with('fail',"Data doesn't deleted");
    }
}
