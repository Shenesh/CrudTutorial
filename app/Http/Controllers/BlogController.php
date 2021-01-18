<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $abc = Blog::all();
        // return $blogs;
       // return('index');
      // return view('folder_name.page_name');
       return view('blogs.index',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  
     * 
     * \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return($request);
       
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
            'description' => 'required|unique:blogs,description',

        ]
        // ,
        // [
        //     'title.required' => 'Title is required',
        //     'description.required' => 'Description is required',
        //     'description.unique' => 'Description must be unique'
        // ]

    );
    
    if ($validator->fails()) {
        return redirect('blogs/create')
                    ->withErrors($validator)
                    ->withInput();
    }
  
        Blog::create($request->all());
   
        return redirect()->route('blogs.index')
                        ->with('success','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // dd($blog);
        return view('blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // $validator = \Validator::make($request->all(),
        //     [
        //         'title' => 'required',
        //         'discription' => 'required|min:5',
              
        //     ], 
        //     [
        //         'title.required' => 'Name is required',
        //         'discription.required' => 'Password is required'
        //     ]
        //   );
  
        $blog->update($request->all());
  
        // return redirect()->route('blogs.index')
        //                 ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
       // return($blog);
        $blog->delete();
  
        return redirect()->route('blogs.index');
        //                 ->with('success','Blog deleted successfully');
    }

 
}
