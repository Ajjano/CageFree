<?php

namespace App\Http\Controllers;

use App\BatterySystemContents;
use App\Contacts;
use App\Content;
use App\OurActivities;
use App\Petition;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
     const PAGINATE_COUNT=1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content=Content::first();
        $ourActivities=OurActivities::all();
        $batterySystems=BatterySystemContents::where('status','1')->take(4)->get();
        $posts=Post::select('id','title', 'image', 'updated_at')->whereStatus(1)->orderBy('updated_at', 'desc')->take(3)->get();
        $petitions=Petition::orderBy('updated_at', 'desc')->get();
        $contacts=Contacts::all();

        return view('index', compact('content', 'ourActivities', 'batterySystems',
            'posts','contacts', 'petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost($id)
    {
        $post=Post::find($id);
        $content=Content::select('contacts__name', 'contacts__title')->first();
        return view('post_details', compact('post', 'content'));
    }

    public function showBlog()
    {
        $posts=Post::orderBy('updated_at', 'desc')->whereStatus('1')->paginate(self::PAGINATE_COUNT);
        $content=Content::select('contacts__name', 'contacts__title')->first();
        return view('blog', compact('posts', 'content'));
    }

    public function showAjax()
    {
        $posts=Post::whereStatus('1')->orderBy('updated_at', 'desc')->paginate(self::PAGINATE_COUNT);

        return view('post_section', compact('posts'));
    }

    public function searchBlog(Request $request){
        // Get the search value from the request
        $search = $request->search;

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->orderBy('updated_at', 'desc')
            ->paginate(self::PAGINATE_COUNT);


        // Return the search view with the resluts compacted
        return view('post_section', compact('posts'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
