<?php

namespace App\Http\Controllers\BackEnd;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
//        $blog = new Blog;
//        $blog->title = $request->title;
//        $blog->content = $request->body;
//        $blog->date_post = \Carbon\Carbon::now();
//
//        $image = $request->file('image');
//
//        // TODO:: Crate slug
//        $new_name = rand() . '.' . $image->getClientOriginalExtension();
//        $blog->cover = $new_name;
//        $image->move(public_path('images/uploads'), $new_name);
//
//        $blog->save();

        return view('back-end.blogs.index');
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
        Blog::destroy($id);

        return response()->json([
            'status' => 'success',
            'message' => 'You delete category!'
        ]);
    }
}
