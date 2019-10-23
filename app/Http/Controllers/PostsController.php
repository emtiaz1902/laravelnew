<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=DB::table('posts')
              ->join('categories','posts.category_id','categories.id')
              ->select('posts.*','categories.name')
              ->get();
        return view('posts.post_home',compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=DB::table('categories')->get();
        return view('posts.create_post',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'details' => 'required|max:400',
            'image' => 'mimes:jpeg,jpg,png|max:3000',
        ]);


        $data=array();
        $data['category_id']=$request->category_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $image=$request->file('image');
        if ($image){
           $image_name=$image->getClientOriginalName();
//           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name;
           $upload_path='public/frontened/image_post/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->move($upload_path,$image_full_name);
           $data['image']=$image_url;
            DB::table('posts')->insert($data);
            return Redirect()->route('AllPosts');
        } else {
            DB::table('posts')->insert($data);
            return Redirect()->route('AllPosts');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=DB::table('posts')
            ->join('categories','posts.category_id','category_id')
            ->select('posts.*','categories.name')
            ->where('posts.id',$id)
            ->first();
        return view('posts.view_post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=DB::table('categories')->get();
        $post=DB::table('posts')->where('id',$id)->first();
        return view('posts.edit_post',compact('category','post'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'details' => 'required|max:400',
            'image' => 'mimes:jpeg,jpg,png|max:3000',
        ]);


        $data=array();
        $data['category_id']=$request->category_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $image=$request->file('image');
        if ($image){
            $image_name= $image->getClientOriginalName();
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=time().'-'.$image_name.'.'.$ext;
            $upload_path='public/frontened/image_post/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            unlink($request->old_photo);
            DB::table('posts')->where('id',$id)->update($data);
            return Redirect()->route('AllPosts');
        } else {
            $data['image']=$request->old_photo;
            DB::table('posts')->where('id',$id)->update($data);
            return Redirect()->route('AllPosts');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();

        $image= $post->image;

        $post=DB::table('posts')->where('id',$id)->delete();
        unlink($image);
        return Redirect()->back()->with('$post');
    }
}
