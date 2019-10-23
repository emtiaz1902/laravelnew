
@extends('layouts.app')


@section('header')
    <h1>Create Category</h1>
    <span class="subheading"> D M Emtiaz</span>

@endsection


@section('contain')
    <div class="row">
        <a href="{{url('/category_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">View Category</a>
        <a href="{{url('/blog_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">View Post</a>
        <a href="{{url('/create_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Create Post</a>
        <div class="col-lg-6 col-md-10 mx-auto">
            <form  action="{{url('/update_category/'.$category->id)}} " method="post">
                @csrf

                <p>
                    Create Category
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
                        <label>Category Name</label>
                        <input type="text" class="form-control" value={{"$category->name"}} name="name"  >

                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Slug</label>
                        <input type="text" class="form-control" value={{"$category->slug"}} name="slug"  >

                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
    </div>


    @endsection
