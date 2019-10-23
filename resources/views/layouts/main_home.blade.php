

@extends('layouts.app')


@section('header')
    <h1>Dewan Blog</h1>
    <span class="subheading">A Blog Theme by D M Emtiaz</span>

    @endsection

@section('contain')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($post as $post_view)
            <div class="post-preview">
                <a href="{{url('/show_post/'.$post_view->id)}}">
                    <h2 class="post-title">
                        {{$post_view->title}}
                    </h2>
                    <img src="{{URL::to($post_view->image)}} " style="height: 300px;width: 400px">
                    <h3 class="post-subtitle">
                        {{$post_view->details}}
                    </h3>
                </a>
                <p class="post-meta">Category
                    <a href="#">{{$post_view->name}}</a>
                    on {{$post_view->slug}} </p>
            </div>
                <hr>
            @endforeach




            <!-- Pager -->
            <div class="clearfix">
                {{$post->links()}}
            </div>
        </div>
    </div>

    @endsection
