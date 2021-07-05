<?php

namespace App\Http\Controllers\Admin;

use App\BatterySystemContents;
use App\Contacts;
use App\Content;
use App\Http\Controllers\Controller;
use App\OurActivities;
use App\Petition;
use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $content=Content::first();
        $ourActivities=OurActivities::all();
        $batterySystems=BatterySystemContents::where('status','1')->take(4)->get();
        $posts=Post::select('id','title', 'image', 'updated_at')->whereStatus(1)->orderBy('updated_at', 'desc')->take(3)->get();
        $petitions=Petition::orderBy('updated_at', 'desc')->get();
        $contacts=Contacts::all();

        return view('admin.index', compact('content', 'ourActivities', 'batterySystems',
            'posts','contacts', 'petitions'));
    }

    public function changeHeader(Request $request)
    {
        $content=Content::first();
        $content->main__subtitle=$request->main_subtitle;
        $content->main__description=$request->main_description;
        $content->uploadImage($request->header_image);
        $content->save();

        echo json_encode(1);
    }
    public function changeOurActivities(Request $request)
    {
        $content=Content::first();
        $content->about_us__name=$request->about_us__name;
        $content->about_us__title=$request->about_us__title;
        $content->about_us__description=$request->about_us__description;
        $content->about_us__our_activity__title=$request->about_us__our_activity__title;
        $content->about_us__our_activity__description=$request->about_us__our_activity__description;
        $content->uploadImageAboutUs($request->about_us__image);
        $content->save();

        echo json_encode('ok');
    }
    public function changeBatterySystem(Request $request)
    {
        $content=Content::first();
        $content->battery_system__name=$request->battery_system__name;
        $content->battery_system__title=$request->battery_system__title;
        $content->save();

        echo 'ok';
    }
    public function changeBlog(Request $request)
    {
        $content=Content::first();
        $content->blog__name=$request->blog__name;
        $content->blog__title=$request->blog__title;
        $content->save();

        echo 'ok';
    }
    public function changeContacts(Request $request)
    {
        $content=Content::first();
        $content->contacts__name=$request->contacts__name;
        $content->contacts__title=$request->contacts__title;
        $content->contacts__description=$request->contacts__description;
        $content->save();

        echo 'ok';
    }

    public function changePetitions(Request $request)
    {
        $content=Content::first();
        $content->petitions__name=$request->petitions__name;
        $content->petitions__title=$request->petitions__title;
        $content->save();

        echo 'ok';
    }
}
