<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\Video;
use App\Models\leave_request_verification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news_count = news::get()->count();
        $videos_count = Video::get()->count();
        $leave_request_count = leave_request_verification::get()->count();
        return view('admin.home.index',compact('news_count','videos_count','leave_request_count'));
    }
}
