<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\ExperienceDetails;
use Illuminate\Http\Request;

class StaffProfileController extends Controller
{ 
    public function index(Request $request)
    {

        //
       // if (isset($request)){ 
            $id = $request->id;
            //echo $key;
            $message="";
            $staffprofile=Profile::where('id',$id)->firstOrFail();
            echo "test"; //$request;
            //dd($staffprofile);
            return view('index')->with('staffprofile',$staffprofile)
                ->with('message',$message);
      //  }
      //  else{
       //     return view('/admin');
      //  }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffprofile.create');

        /*$profiles = new Profile();
        return view('staffprofile.edit', compact('profiles'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $maxId = Profile::max('id');
        $maxId = Experience::max('id');
        $maxId = ExperienceDetails::max('experience_id');
        $newId = $maxId + 1;

        $profiles = new Profile();
        $profiles->id = $newId;

        $profiles->uuid = Profile::max('uuid') + 1;
        $profiles->uuid = $request->input('uuid');
        $profiles->title = $request->input('title');
        $profiles->staffname = $request->input('staffname');
        $profiles->youtube = $request->input('youtube');
        $profiles->Jobs = $request->input('Jobs');
        $profiles->profilepic = $request->input('profilepic');
        $profiles->text = $request->input('text');

        $experiences = new Experience();

        $experiences->id = $newId;
        $experiences->uuid = Experience::max('uuid') + 1;
        $experiences->user_id = $newId;
        $experiences->header = $request->input('header');
        $experiences->years = $request->input('years');
        $experiences->detailsscope = $request->input('detailsscope');
        $experiences->picture = $request->input('picture');

        // Update data in the third table
        $experience_details = new ExperienceDetails();

        $experience_details->experience_id = $newId;
        $experience_details->picture = $request->input('picture');
        $experience_details->scope = $request->input('scope');
        $experience_details->details= $request->input('details');
        $experience_details->cost = $request->input('cost');
        $experience_details->statistics = $request->input('statistics');

        $profiles->save();
        $experiences->save();
        $experience_details->save();

        $profiles = compact('profiles', 'experiences', 'experience_details');
        //return view('staffprofile.index', $profiles);
        return redirect()->route('staffprofile.index', $profiles);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
        $message="";
        $staffprofile=Profile::where('id',$id)->firstOrFail();
        dd($staffprofile);
        //return view('staffprofile.index')->with('staffprofile',$staffprofile)
         //   ->with('message',$message);
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        $experience = Experience::where('user_id', $id)->first();
        $experience_details = ExperienceDetails::where('experience_id', $id)->first();
        return view('staffprofile.edit', compact('profile','experience','experience_details'));
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
        
        $profiles = Profile::find($id);
        $profiles->uuid = $request->input('uuid');
        $profiles->title = $request->input('title');
        $profiles->staffname = $request->input('staffname');
        $profiles->youtube = $request->input('youtube');
        $profiles->Jobs = $request->input('Jobs');
        $profiles->profilepic = $request->input('profilepic');
        $profiles->text = $request->input('text');
        $profiles->save();

        // Update data in the second table
        $experiences = Experience::where('user_id', $id)->first();
        $experiences->uuid = $request->input('uuid');
        $experiences->header = $request->input('header');
        $experiences->years = $request->input('years');
        $experiences->detailsscope = $request->input('detailsscope');
        $experiences->picture = $request->input('picture');
        $experiences->save();

        // Update data in the third table
        $experience_details = ExperienceDetails::where('experience_id', $id)->first();
        $experience_details->picture = $request->input('picture');
        $experience_details->scope = $request->input('scope');
        $experience_details->details= $request->input('details');
        $experience_details->cost = $request->input('cost');
        $experience_details->statistics = $request->input('statistics');
        $experience_details->save();

        $profiles = compact('profiles', 'experiences', 'experience_details');
        return view('staffprofile.index', $profiles);
        //return view('staffprofile.index')->with('profiles'->$profiles)->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profiles = Profile::find($id);
        if (!$profiles) {
            return view('staffprofile.error');
        }

        $profiles = Profile::find($id)->delete();
        $experiences = Experience::where('user_id', $id)->delete();
        $experience_details = ExperienceDetails::where('experience_id', $id)->delete();

        return view('staffprofile.error');
    }
}
