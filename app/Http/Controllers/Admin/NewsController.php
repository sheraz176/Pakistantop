<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\category;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = news::select('*')->orderBy('created_at', 'DESC');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){

                           return '<a class="btn btn-success btn-sm text-white"  href="'.route('admin.news.edit',$data->id).'" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-danger btn-sm text-white mb-1"  href="'.route('admin.news.destroy',$data->id).'" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                           <a class="btn btn-primary btn-sm text-white mb-1"  href="'.route('admin.news.show',$data->id).'" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
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

        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::latest()->get();
        return view('admin.news.create',compact('category'));
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
            'news_title' => 'required',
            'news_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $news = new News();
         $news->news_title = $request->news_title;
         $news->slug = str_slug($request->news_title , "-");
         $news->category = $request->category;
         $news->news_description = $request->news_description;
         $news->image = $request->image->store('news');
         $news->save();
        return redirect()->route('admin.news.index')
                        ->with('success','News created successfully.');
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
        $category = Category::latest()->get();
        return view('admin.news.show',compact('news','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $category = Category::latest()->get();
        return view('admin.news.edit',compact('news','category'));
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
            'news_title' => 'required',
            'news_description' => 'required'
        ]);

        $news = News::find($id);
        $news->news_title = $request->news_title;
        $news->slug = str_slug($request->news_title , "-");
        $news->category = $request->category;
        $news->news_description = $request->news_description;
        if (!empty($request->image)) {
            $news->image = $request->image->store('news');
        }
        $news->update();


        return redirect()->route('admin.news.index')
                        ->with('success','News updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news ,$id)
    {
        $news = News::find($id);
        $news->delete();
          return redirect()->route('admin.news.index')
                        ->with('success','news deleted successfully');
    }
}
