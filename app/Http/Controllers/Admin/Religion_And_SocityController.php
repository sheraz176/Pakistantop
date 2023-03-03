<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\religion_and_socity;
use App\Models\ReligionIcon;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use Storage;


class Religion_And_SocityController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = religion_and_socity::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '<a class="btn btn-success btn-sm text-white"  href="'.route('admin.religion_and_socity.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.religion_and_socity.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           <a class="btn btn-primary btn-sm text-white mb-1"  href="'.route('admin.religion_and_socity.show',$data->id).'" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
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

        return view('admin.religion_and_socity.index');
    }


    public function create()
    {
        $icons = ReligionIcon::get();
        return view('admin.religion_and_socity.create',compact('icons'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


         $religion_and_socity = new religion_and_socity();
         $religion_and_socity->title = $request->title;
         $religion_and_socity->description = $request->description;
         $religion_and_socity->image = $request->image->store('religion_and_socity');
         $religion_and_socity->icon_id = $request->icon;
         $religion_and_socity->intro = $request->intro;
         $religion_and_socity->save();
        return redirect()->route('admin.religion_and_socity.index')
                        ->with('success','religion_and_socity created successfully.');
    }


    public function show($id)
    {
        $religion_and_socity = religion_and_socity::find($id);
        return view('admin.religion_and_socity.show',compact('religion_and_socity'));
    }


    public function edit($id)
    {
        $icons = ReligionIcon::get();
        $religion_and_socity = religion_and_socity::find($id);
        return view('admin.religion_and_socity.edit',compact('religion_and_socity','icons'));
    }



    public function update(Request $request ,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $religion_and_socity = religion_and_socity::find($id);
        $religion_and_socity->title = $request->title;
        $religion_and_socity->icon_id = $request->icon;
        $religion_and_socity->intro = $request->intro;
        $religion_and_socity->description = $request->description;
        if (!empty($request->image)) {
            $religion_and_socity->image = $request->image->store('religion_and_socity');
        }
        $religion_and_socity->update();


        return redirect()->route('admin.religion_and_socity.index')
                        ->with('success','religion_and_socity updated successfully');
    }



    public function destroy(religion_and_socity $religion_and_socity ,$id)
    {
        $religion_and_socity = religion_and_socity::find($id);
        $religion_and_socity->delete();
          return redirect()->route('admin.religion_and_socity.index')
                        ->with('success','religion_and_socity deleted successfully');
    }
}
