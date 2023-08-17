@extends('layouts.app')

@section('content')
    <div class="w-4/5 text-center m-auto">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        </div>
        
    </div>

    @if (session()->has('msg'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-2">
                {{session()->get('msg')}}
            </p>
        </div>    

    @endif

    @if (Auth::check())
        <div class="pt-14 w-4/5 m-auto ">
            <a href="/blog/create" class="bg-blue-500 uppercase text-gray-100 text-sm font-extrabold py-3 px-10 rounded-xl">Create a Post</a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
            <div>
                <img src="{{url('/image/'.$post->img_path)}}" width="700" alt="">
            </div>
            <div class="">
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                   {{$post->title}}
                </h2>
                <span class="text-gray-500 ">
                    By <span class="font-bold italic text-gray-800">  {{$post->user->name}} </span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}} ago
                </span>
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->description}}
                </p>
                <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 font-extrabold py-4 px-8 rounded-3xl">Keep reading</a>
            </div>
            
        </div>


    @endforeach

    

@endSection

