<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\Area;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Area::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '<a class="btn btn-success btn-sm text-white"  href="'.route('admin.area.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.area.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                           ';

                            return $btn;
                    })
                    ->addColumn('created_at', function($data){

                        return Carbon::parse($data->created_at)->diffForHumans();


                         return $btn;
                 })
                    ->rawColumns(['action','created_at'])
                    ->make(true);
        }

        return view('admin.area.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.area.create');
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

         $area = new Area();
         $area->name = $request->name;
         $area->map_area_name = $request->map_name;
         $area->lat = $request->lat;
         $area->lng = $request->lng;
         $area->save();
        return redirect()->route('admin.area.index')
                        ->with('created','Area created successfully.');
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
        $area = Area::find($id);
        return view('admin.area.edit',compact('area'));
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
            'name' => 'required',
        ]);

        $area = Area::find($id);
         $area->name = $request->name;
         $area->map_area_name = $request->map_name;
         $area->lat = $request->lat;
         $area->lng = $request->lng;
         $area->update();


        return redirect()->route('admin.area.index')
                        ->with('updated','Area updated successfully');
    }



    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
          return redirect()->route('admin.area.index')
                        ->with('deleted','area deleted successfully');
    }
}
