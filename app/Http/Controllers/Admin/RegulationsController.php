<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\regulations;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;



class RegulationsController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = regulations::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '<a class="btn btn-success btn-sm text-white"  href="'.route('admin.regulations.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.regulations.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           <a class="btn btn-primary btn-sm text-white mb-1"  href="'.route('admin.regulations.show',$data->id).'" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
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

        return view('admin.regulations.index');
    }


    public function create()
    {
        return view('admin.regulations.create');
    }


    public function store(Request $request)
    {


         $regulations = new regulations();
         $regulations->title = $request->title;
         $regulations->link = $request->link;

         $regulations->file = $request->file->store('regulations');
         $regulations->save();
        return redirect()->route('admin.regulations.index')
                        ->with('success','created successfully.');
    }


    public function show($id)
    {
        $regulations = regulations::find($id);
        return view('admin.regulations.show',compact('regulations'));
    }


    public function edit($id)
    {
        $regulations = regulations::find($id);
        return view('admin.regulations.edit',compact('regulations'));
    }



    public function update(Request $request ,$id)
    {

         $regulations = regulations::find($id);
         $regulations->title = $request->title;
         $regulations->link = $request->link;

        if (!empty($request->file)) {
            $regulations->file = $request->file->store('regulations');
        }
        $regulations->update();


        return redirect()->route('admin.regulations.index')
                        ->with('success','Leave updated successfully');
    }



    public function destroy(regulations $regulations ,$id)
    {
        $regulations = regulations::find($id);
        $regulations->delete();
          return redirect()->route('admin.regulations.index')
                        ->with('success','regulations deleted successfully');
    }
}
