<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=DB::table('categories')->get();
        return view('categories.home_category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create_category');
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
            'name' => 'required|unique:categories|max:30',
            'slug' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->insert($data);
        return Redirect()->route('AllCategory')->with('$notification');
//        if ($category){
//           $notification=array(
//             'messege'=>  'Successfully Category Inserted',
//               'alert-type'=>'success'
//           );
//           return Redirect()->back()->with('$notification');
//         } else {
//            $notification=array(
//                'messege'=>  'Something Went Wrong ',
//                'alert-type'=>'error'
//            );
//            return Redirect()->route('AllCategory')->with('$notification');
//
//        }
//        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $category=DB::table('categories')->where('id',$id)->first();
        return view('categories.view_category',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('categories.edit_category',compact('category'));
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
            'name' => 'required|max:30',
            'slug' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->where('id',$id)->update($data);
        return Redirect()->route('AllCategory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=DB::table('categories')->where('id',$id)->delete();
        return Redirect()->back()->with('$category');
    }
}
