@extends('layouts.app')


@Section('content')

    <div class="w-4/5 text-left m-auto">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">{{$post->title}}</h1>
        </div>
        <div >
            <img src="{{url('/image/'.$post->img_path)}}" class="h-[400px] w-full" alt="">
        </div>
    </div>
    
  

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500 ">
            <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>
            , Created on {{ date('jS M Y', strtotime($post->updated_at))}} ago
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{$post->description}}
        </p>

        @if (isset(Auth::user()->id) && Auth::user()->id === $post->user_id)

           
            <span class="float-right">
                    <a href="/blog/{{$post->slug}}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1.5 border-b-2">Edit</a>
                </span>
                <span class="float-right pr-4">
                    <form action="/blog/{{$post->slug}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit"  class=" text-red-500 italic hover:text-red-700 border-b-2 pb-1  ">Delete</a>
                    </form>
                    
                </span>


        @endif
    </div>


@endSection

