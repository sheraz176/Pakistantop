<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\reference_information;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;



class Reference_informationController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = reference_information::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '<a class="btn btn-success btn-sm text-white"  href="'.route('admin.reference_information.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.reference_information.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           <a class="btn btn-primary btn-sm text-white mb-1"  href="'.route('admin.reference_information.show',$data->id).'" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
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

        return view('admin.reference_information.index');
    }


    public function create()
    {
        return view('admin.reference_information.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'reference_title' => 'required',
            'reference_descripition' => 'required',

        ]);

         $reference_information = new reference_information();
         $reference_information->reference_title = $request->reference_title;
         $reference_information->reference_descripition = $request->reference_descripition;
         $reference_information->save();
        return redirect()->route('admin.reference_information.index')
                        ->with('success','Leave created successfully.');
    }


    public function show($id)
    {
        $reference_information = reference_information::find($id);
        return view('admin.reference_information.show',compact('reference_information'));
    }


    public function edit($id)
    {
        $reference_information = reference_information::find($id);
        return view('admin.reference_information.edit',compact('reference_information'));
    }



    public function update(Request $request ,$id)
    {
        $request->validate([
            'reference_title' => 'required',
            'reference_descripition' => 'required',

        ]);
         $reference_information = reference_information::find($id);
         $reference_information->reference_title = $request->reference_title;
         $reference_information->reference_descripition = $request->reference_descripition;



        $reference_information->update();


        return redirect()->route('admin.reference_information.index')
                        ->with('success','Reference updated successfully');
    }



    public function destroy(reference_information $reference_information ,$id)
    {
        $reference_information = reference_information::find($id);
        $reference_information->delete();
          return redirect()->route('admin.reference_information.index')
                        ->with('success','reference_information deleted successfully');
    }
}
