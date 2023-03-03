<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\leave_request_verification;
use Storage;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;



class Leave_request_verificationController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = leave_request_verification::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.leave_request_verification.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           <a class="btn btn-primary btn-sm text-white mb-1"  href="'.route('admin.leave_request_verification.show',$data->id).'" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
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

        return view('admin.leave_request_verification.index');
    }


    public function create()
    {
        return view('admin.leave_request_verification.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',

        ]);

         $leave_request_verification = new leave_request_verification();
         $leave_request_verification->full_name = $request->full_name;
         $leave_request_verification->email = $request->email;
         $leave_request_verification->message = $request->message;
         $leave_request_verification->map_object = $request->map_object;
         $leave_request_verification->file = $request->file->store('leave_request_verification');
         $leave_request_verification->save();
        return redirect()->route('admin.leave_request_verification.index')
                        ->with('success','Leave created successfully.');
    }


    public function show($id)
    {
        $leave_request_verification = leave_request_verification::find($id);
        return view('admin.leave_request_verification.show',compact('leave_request_verification'));
    }


    public function edit($id)
    {
        $leave_request_verification = leave_request_verification::find($id);
        return view('admin.leave_request_verification.edit',compact('leave_request_verification'));
    }



    public function update(Request $request ,$id)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',

        ]);
         $leave_request_verification = leave_request_verification::find($id);
         $leave_request_verification->full_name = $request->full_name;
         $leave_request_verification->email = $request->email;
         $leave_request_verification->message = $request->message;
         $leave_request_verification->map_object = $request->map_object;

        if (!empty($request->file)) {
            $leave_request_verification->file = $request->file->store('leave_request_verification');
        }
        $leave_request_verification->update();


        return redirect()->route('admin.leave_request_verification.index')
                        ->with('success','Leave updated successfully');
    }



    public function destroy(leave_request_verification $leave_request_verification ,$id)
    {
        $leave_request_verification = leave_request_verification::find($id);
        $leave_request_verification->delete();
          return redirect()->route('admin.leave_request_verification.index')
                        ->with('success','leave_request_verification deleted successfully');
    }
}
