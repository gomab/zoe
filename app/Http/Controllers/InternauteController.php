<?php

namespace App\Http\Controllers;

use App\Espece;
use Illuminate\Http\Request;
use App\Site;

class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        $especes = Espece::all();

        return view('welcome', compact('sites', 'especes'));

        /*
        $sliders    = Slider::all();
        $categories = Category::all();
        $items      = Item::all();
        return view('welcome', compact('sliders', 'categories', 'items'));
        */
    }

    public function getEspeces()
    {
        $especes = Espece::all();

        return view('especes', compact( 'especes'));

    }

    public function getEspeceOne($slug)
    {
        //$post = Post::where('slug',$slug)->approved()->published()->first();
        $espece = Espece::where('slug', $slug)->first();

        return view('espece', compact( 'espece'));


        /**
         *
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
        $post->increment('view_count');
        Session::put($blogKey,1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        return view('post',compact('post','randomposts'));
         */
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
    public function show($id)
    {
        //
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
