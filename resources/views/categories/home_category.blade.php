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
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category Name</th>
            <th scope="col">Slug Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $category_show)
        <tr>
            <th scope="row">{{$category_show->id}}</th>
            <td>{{$category_show->name}}</td>
            <td>{{$category_show->slug}}</td>
            <td>{{$category_show->created_at}}</td>
            <td>
                <a href="{{url('/edit_category/'.$category_show->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                <a href="{{url('/delete_category/'.$category_show->id)}}" class="btn btn-sm btn-outline-danger" id="delete">Delete</a>
                <a href="{{url('/show_category/'.$category_show->id)}}" class="btn btn-sm btn-outline-success">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    @endsection
