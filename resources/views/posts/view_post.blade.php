@extends('layouts.app')


@section('header')
    <h1>Category View</h1>
    <span class="subheading">Created by D M Emtiaz</span>

@endsection


@section('contain')

    <a href="{{url('/create_category')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Create Category</a>
    <a href="{{url('/blog_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">View Post</a>
    <a href="{{url('/create_post')}}" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Create Post</a>


    <table class="table table-striped col-lg-12  mx-auto">
        <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category Name</th>
            <th scope="col">Title Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->details}}</td>
                <td><img src="{{URL::to($post->image)}}" style="height: 40px;width: 70px"></td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{url('/edit_post/'.$post->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    <a href="{{url('/delete_post/'.$post->id)}}" class="btn btn-sm btn-outline-danger" id="delete">Delete</a>
                    <a href="{{url('/blog_post/')}}" class="btn btn-sm btn-outline-success">All View</a>
                </td>
            </tr>

        </tbody>
    </table>

@endsection
