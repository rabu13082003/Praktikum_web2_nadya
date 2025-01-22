@extends('layouts.app') 
@section('content') 
<div class="card"> 
    <div class="card-header"> 
        <p>Add New Post</p> 
    </div> 
    <div class="card-body"> 
    @if(Auth::check()) 
        <form action="{{route('postStore')}}" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="">Title</label> 
                <input type="text" name="title" id="title" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="">body</label> 
                <textarea name="body" id="body" class="form-control" required></textarea> 
            </div> 
            <div class="text-end mt-3"> 
                <button type="submit" class="btn btn-primary">Save Post</button> 
            </div> 
        </form> 
        @else 
        <p> Please login in to create a post </p> 
        @endif 
    </div> 
</div> 
@foreach($posts as $post) 
    <div class="card mb-3"> 
        <div class="card-body"> 
            <h4 class="m-0">{{$post->title}}</h4> 
            <small class="m-0"> 
                posted by {{$post->user->nama}} on {{Carbon\carbon::parse($post->created_at)->diffForHumans()}} 
            </small> 
            <p class="mt-2">{{$post->body}}</p> 
        </div> 
        <div class="card"> 
            <div class="text-end"> 
                @if(Auth::check()) 
                @if(Auth::user()->id == $post->user_id) 
                <form action="{{route('postDelete', $post->id)}}" method="post"> 
                    @csrf 
                    @method('delete') 
                    <button type="submit" class="btn btn-danger"> Delete</button> 
                </form> 
                @endif 
                @endif 
            </div> 
        </div> 
    </div> 
@endforeach 
@endsection