<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use App\Models\Area;
use App\Models\Place;
use App\Models\regulations;
use App\Models\Video;
use App\Models\leave_request_verification;
use App\Models\reference_information;
use App\Models\religion_and_socity;
use App\Models\leader;
use App\Models\mode;
use Storage;
use Embed\Embed;
use Session;

class FrontendController extends Controller
{
    public function index()
    {
      $religions = religion_and_socity::get();
      $areas = Area::get();
      $Newsone = News::orderBy('created_at', 'desc')->take(1)->get();
      $playing = News::where('category', 'کھیل')->take(2)->get();
      $playingfour = News::where('category', 'کھیل')->take(4)->get();
      $business = News::where('category', 'کاروبار')->take(4)->get();
      $mobile = News::where('category', 'mobile_phone')->take(8)->get();
      $shoesa = News::where('category', 'شوبز')->take(6)->get();
      $cars = News::where('category', 'cars_prices')->take(8)->get();
      $bike = News::where('category', 'bike_prices')->take(8)->get();
      $technology = News::where('category', 'ٹیکنالوجی')->take(2)->get();
      $technologyfour = News::where('category', 'ٹیکنالوجی')->take(4)->get();
      $islam = News::where('category', 'اسلام')->take(12)->get();
      $dilcasab = News::where('category', 'دلچسپ و عجیب')->take(4)->get();
      $dilcasabfour = News::where('category', 'دلچسپ و عجیب')->take(4)->get();
      $boys_name = News::where('category', 'boys_name')->take(12)->get();
      $girls_name = News::where('category', 'girls_name')->take(12)->get();
      $dinner = News::where('category', 'پکوان')->take(12)->get();
      $childeren = News::where('category', 'بچے')->take(12)->get();
      $girls = News::where('category', 'خواتین')->take(12)->get();
      $health = News::where('category', 'صحت')->take(12)->get();
      $books = News::where('category', 'کتابیں')->take(12)->get();
      $mazaja = News::where('category', 'مزاح')->take(12)->get();
      $adaba = News::where('category', 'ادب')->take(12)->get();

      $News = News::orderBy('created_at', 'desc')->take(4)->get();
      $Videos = Video::orderBy('created_at', 'desc')->take(6)->get();
      $Newslast = News::orderBy('created_at', 'asc')->take(6)->get();
      $Regulations = Regulations::orderBy('created_at', 'DESC')->take(8)->get();
        return view('main-site.home.index',compact('Videos','Newslast','News','Regulations','areas','religions','Newsone','playing',
    'playingfour','business','mobile','shoesa','cars','bike','technology','technologyfour',
      'islam','dilcasab','dilcasabfour','boys_name','girls_name','dinner','childeren','girls','health','books',
    'mazaja','adaba' ));
    }
    public function about()
    {
        return view('main-site.pages.about');
    }
    public function search(Request $req)

    {
        // dd($req->all);
        // $news= News::orderBy('id', 'desc','category', 'like', '%'.$req->input('category').'%')->get();
     $news = News::where('category', 'LIKE', '%'.$req->input('category').'%')->orderBy('category')->get();

        return view('main-site.pages.search',compact('news'));
    }
    public function religiouscard()
    {
        $religions = religion_and_socity::get();
        $areas = Area::get();
        return view('main-site.pages.religiouscard',compact('religions','areas'));
    }
    public function reference()
    {
        $reference_information = reference_information::latest()->get();
        return view('main-site.pages.referenceinformation')->with('reference_information',$reference_information);
    }
    public function religion()
    {
        $religion_and_socity = religion_and_socity::latest()->get();
        return view('main-site.pages.religionandsocity')->with('religion_and_socity',$religion_and_socity);
    }
    public function religiondetail($id)
    {
        $religion_and_socity = religion_and_socity::find($id);
        $leaders = leader::orderBy('created_at', 'desc')->take(4)->get();
        $buildings = Place::where('confession_type',$id)->where('building_type','religious_building')->take(5)->get();
        return view('main-site.pages.religiousdetails',compact('religion_and_socity','buildings','leaders'));
    }
    public function verification()
    {
        return view('main-site.pages.verification');
    }
    public function video()
    {

        $videos = Video::latest()->paginate(10);

        return view('main-site.pages.video')->with('videos',$videos);
    }
    public function regulations()
    {
        $Regulations = Regulations::latest()->paginate(10);
        return view('main-site.pages.regulations')->with('Regulations', $Regulations);

    }

    public function news()
    {
        $News = News::latest()->paginate(10);
        return view('main-site.pages.news')->with('News', $News);
    }

    public function newsdetail($id)
    {
        $News = News::orderBy('created_at', 'desc')->take(10)->get();
        $news = News::find($id);
        return view('main-site.pages.news-details',compact('news','News'));
    }
    public function videoDetail($id)
    {

        $video = Video::find($id);
        return view('main-site.pages.videodetail',compact('video'));
    }
    public function NewspaperDetail($id)
    {

        $newspaper = Regulations::find($id);

        return view('main-site.pages.news_paper_detail',compact('newspaper'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

         $leave_request_verification = new leave_request_verification();
         $leave_request_verification->full_name = $request->full_name;
         $leave_request_verification->email = $request->email;
         $leave_request_verification->message = $request->message;
         $leave_request_verification->map_object = $request->map_object;
         $leave_request_verification->lat = $request->lat;
         $leave_request_verification->long = $request->long;
         $leave_request_verification->file = $request->file->store('leave_request_verification');
         $leave_request_verification->save();
        return redirect()->route('main-site.pages.verification')
                        ->with('success','Leave created successfully.');
    }


    public function placeMarks(Request $request)
    {
        $default_area = Area::where('lat','42.340782')->where('lng','69.596329')->first();
        $places = Place::query();
        $datas = [];
        $data =[];
        $datas_ = [];
        if (!empty($request->confession_id)) {
           $places = $places->where('confession_type',$request->confession_id);
        }
        if (!empty($request->area_type)) {
            $places = $places->where('area_type',$request->area_type);
         }
         if (!empty($request->building_id)) {
            $places = $places->where('building_type',$request->building_id);
         }

         if (!empty($request->search)) {
            $places = $places->where('title', 'LIKE', '%'. $request->search .'%');
         }

         if (empty($request->confession_id) && empty($request->area_type) && empty($request->building_id) && empty($request->search)) {
            $places = $places->where('area_type',$default_area->id);
         }

         $places = $places->get();

        foreach ($places as $key => $place) {
            // $data = array('type' => 'Feature','id'=>$key,'geometry'=> array('type'=>'Point','coordinates'=>[$place->lat,$place->lng]),'properties'=>array('balloonContent'=>$place->title));
            $religion = $place->confession->title;
            $religion_icon = 'https://www.clipartmax.com/png/middle/294-2942811_address-comments-white-address-icon-png.png';
            if (!empty($place->confession->icon_id)) {
                $religion_icon = $place->confession->icon->url;
            }
            $data = array('type' => 'Feature','id'=>$key,'geometry'=> array('type'=>'Point','coordinates'=>[$place->lat,$place->lng]),'properties'=>array("balloonContentHeader"=> "<font size=3><b>$place->title</b></font>", "balloonContentBody"=> "<p style='display: inline-block;'><img style='height: 16px;' src='$religion_icon'> $religion</p><br><p>$place->map_area_name</p>", "balloonContentFooter"=> "<a  target='_blank' href=".route('object.detail',$place->id).">More</a>", "clusterCaption"=> $place->title, "hintContent"=> $place->title),'options'=>array("iconLayout"=>"default#image","iconImageHref"=> $religion_icon, "iconImageSize"=>[30, 42]));
            array_push($datas,$data);
        }

       $datas_ = array('type'=>'FeatureCollection','features'=>$datas);

       return  $datas_;


    }

    public function objectDetail($id)
    {
       $place = Place::find($id);
       $leader= leader::where('place_id',$id)->first();
       return view('main-site.pages.object-detail',compact('place','leader'));
    }


    public function leader()
    {
        $leaders = leader::latest()->paginate(10);
        return view('main-site.pages.leaders')->with('leaders', $leaders);
    }

    public function buildingshow()
    {
        $buildings = Place::where('building_type','religious_building')->paginate(10);
        return view('main-site.pages.buildingshow')->with('buildings', $buildings);
    }

    public function mode(Request $request){

        $mode = mode::first();
        return view('main-site.layouts.mode', compact('mode'));
              }

    public function session_set(Request $request)
    {
        Session::put('toggle_check', $request->session_id);
        return response()->json(['session successfully saved']);

    }



}

