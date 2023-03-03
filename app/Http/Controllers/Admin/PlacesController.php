<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\Area;
use App\Models\Place;
use App\Models\leader;
use App\Models\religion_and_socity;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;


class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Place::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '
                           <a class="btn btn-info btn-sm text-white"  href="'.route('admin.place.leader',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="leader"><i class="fa fa-user"></i></a>
                           <a class="btn btn-success btn-sm text-white"  href="'.route('admin.places.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.places.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                           ';

                            return $btn;
                    })
                    ->addColumn('created_at', function($data){

                        return Carbon::parse($data->created_at)->diffForHumans();


                         return $btn;
                 })
                 ->addColumn('confession_type', function($data){

                    return $data->confession->title;


                     return $btn;
             })
                    ->rawColumns(['action','created_at','confession_type'])
                    ->make(true);
        }

        return view('admin.places.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $religions = religion_and_socity::get();
        $areas = Area::get();
        return view('admin.places.create',compact('religions','areas'));
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
            'title' => 'required',
            'confession_type' => 'required',
            'area_type' => 'required',
            'building_type' => 'required',
            'lat' => 'required',
        ],
     [
            'lat' => 'please select location !.'

        ]);
        // dd($request->all());

         $place = new Place();
         $place->title = $request->title;
         $place->phone_no = $request->phone_no;
         $place->email = $request->email;
         $place->image = !empty($request->image)? $request->image->store('places'):'';
         $place->description = $request->description;
         $place->lat = $request->lat;
         $place->lng = $request->lng;
         $place->map_area_name = $request->map_name;
         $place->confession_type = $request->confession_type;
         $place->building_type = $request->building_type;
         $place->area_type = $request->area_type;
         $place->save();


        return redirect()->route('admin.places.index')
                        ->with('created','place created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::find($id);
        $religions = religion_and_socity::get();
        $areas = Area::get();
        return view('admin.places.edit',compact('place','religions','areas'));
    }

    public function leader($id)
    {
        $place = Place::find($id);
        $leader= leader::where('place_id',$id)->first();
        return view('admin.leaders.index',compact('leader','place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request ,$id)
    {
        $request->validate([
            'title' => 'required',
            'confession_type' => 'required',
            'area_type' => 'required',
            'building_type' => 'required',
            'lat' => 'required',
        ],
     [
            'lat' => 'please select location !.'

        ]);

        $place = Place::find($id);
        $place->title = $request->title;
        $place->phone_no = $request->phone_no;
        $place->email = $request->email;
        if (!empty($request->image)) {
            $place->image = $request->image->store('places');
        }

        $place->description = $request->description;
        $place->lat = $request->lat;
        $place->lng = $request->lng;
        $place->map_area_name = $request->map_name;
        $place->confession_type = $request->confession_type;
        $place->building_type = $request->building_type;
        $place->area_type = $request->area_type;
        $place->update();

        return redirect()->route('admin.places.index')
                        ->with('updated','Place updated successfully');
    }



    public function destroy($id)
    {
        $leader = leader::where('place_id',$id)->first();
        if (!empty($leader)) {
            $leader->delete();
        }
        $place = Place::where('id',$id)->first()->delete();
          return redirect()->route('admin.places.index')
                        ->with('deleted','place deleted successfully');
    }
}
