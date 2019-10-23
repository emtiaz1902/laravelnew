
@extends('layouts.app')


@section('header')
    <h1>Create Post</h1>
    <span class="subheading"> D M Emtiaz</span>

@endsection


@section('contain')
    <div class="row">
        <a href="{{url('/blog_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">View Post</a>
        <a href="{{url('/category_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">View Category</a>
        <a href="{{url('/create_category')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Create Category</a>
        <div class="col-lg-6 col-md-10 mx-auto">
            <form  action="{{url('/update_post/'.$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <p>


                    Create Post
                </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Category </label>
                        <select class="form-control" name="category_id">
                            @foreach($category as $category_list)
                                <option value="{{$category_list->id}}" <?php if ($category_list->id == $post->category_id)
                                    echo "selected"?>>{{$category_list->name}}</option>

                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Title</label>
                        <input type="text" class="form-control" value={{"$post->title"}} name="title"  >

                    </div>
                </div>


                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Details</label>
                        <textarea rows="5" class="form-control"  name="details"  >
                           {{ $post->details}}
                        </textarea>

                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Image</label>

                        <input type="file" class="form-control"  name="image"  >

                       Old Image <img src="{{URL::to($post->image)}}" style="height: 40px;width: 70px;" >
                        <input type="hidden"   name="old_photo" value="{{$post->image}}"  >
                    </div>
                </div> <br>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
    </div>


@endsection
