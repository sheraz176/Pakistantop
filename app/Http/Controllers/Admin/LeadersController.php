<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\leader;
use App\Models\Place;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class LeadersController extends Controller
{

    public function create($id)
    {
        $place = Place::find($id);
        return view('admin.leaders.create',compact('place'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $leader = new leader();
         $leader->name = $request->name;
         $leader->email = $request->email;
         $leader->place_id = $request->place_id;
         $leader->address = $request->address;
         $leader->religion_id = $request->religion_id;
         $leader->description = $request->description;
         $leader->image = $request->image->store('leader');
         $leader->icon = $request->icon->store('icon');
         $leader->save();
        return redirect()->route('admin.place.leader',$request->place_id)
                        ->with('success','leader created successfully.');
    }




    public function destroy(leader $leader ,$id)
    {
        $leader = leader::where('id',$id)->first()->delete();
        return redirect()->back()
                        ->with('success','leader deleted successfully');
    }

    public function show($id)
    {
        $place = place::find($id);
        $leader = leader::find($id);
        return view('main-site.pages.leaderdetails',compact('leader','place'));
    }



}
