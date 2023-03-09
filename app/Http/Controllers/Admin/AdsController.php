<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads;
use Storage;
use DataTables;
use Carbon\Carbon;

class AdsController extends Controller
{
    public function create()
    {

        return view('admin.ads.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $ads = new Ads();
         $ads->title = $request->title;
         $ads->description = $request->description;
         $ads->link = $request->link;
         $ads->image = $request->image->store('ads');
         $ads->save();
        return redirect()->route('admin.ads.index')
                        ->with('success','Ads created successfully.');
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Ads::select('*')->orderBy('created_at', 'DESC');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.ads.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           ';

                            return $btn;
                    })
                    ->addColumn('image', function($data){

                        return '
                        <img  style="height:100px;weight:100px;"  src="'. Storage::url($data->image) .'" >

                        ';

                         return $btn;
                 })
                    ->addColumn('created_at', function($data){

                        return Carbon::parse($data->created_at)->diffForHumans();


                         return $btn;
                 })
                    ->rawColumns(['action','created_at','image'])
                    ->make(true);
        }

        return view('admin.ads.index');
    }
    public function destroy(ads $ads ,$id)
    {
        $ads = Ads::find($id);
        $ads->delete();
          return redirect()->route('admin.ads.index')
                        ->with('success','Ads deleted successfully');
    }




}
