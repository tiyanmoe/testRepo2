<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileController extends Controller
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
        return view('admin.profile', compact('profiles'));
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $profiles = DB::table('profiles')
            ->select('profiles.*')
            ->get();
        return view('admin.profile_edit', compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile, $id)
    {
//        $request->validate([
//            'name' => 'required',
//            'birth_day' => 'required',
//            'address' => 'required',
//            'nation' => 'required',
//            'phone' => 'required',
//            'email' => 'required',
//            'about' => 'required',
//            'role' => 'required',
//        ]);

        $profile = Profile::where('id',$id)->first();
        $profile->name = $request->name;
        $profile->birth_day = $request->birth_day;
        $profile->address = $request->address;
        $profile->nation = $request->nation;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->about = $request->about;
        $years = Carbon::parse($profile->birth_day)->age;
        $profile->age = $years;

//        dd($years);

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $fileName = time().'.'.$photo->getClientOriginalName();
            $ServicesPath = public_path('profile_photo');
            $photo->move($ServicesPath, $fileName);
            $profile->photo = $fileName;
        }
//        dd($profile);

        $profile->save();

        return redirect('admin_side/profile')->with('success',"Portfolio telah diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
