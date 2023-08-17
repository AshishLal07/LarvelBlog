@extends('layouts.app')


@Section('content')

    <div class="w-4/5 text-left m-auto">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">Create Post</h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <form class="create-blog"  action="/blog" method="post" enctype="multipart/form-data">
            @csrf

        <input type="text" name = 'title' placeholder="Title..." class=" block  w-full h-20 text-6xl border-transparent   focus:border-transparent focus:ring-0 ">

        <textarea name="description" class="py-20  w-full h-60 text-xl border-transparent focus:border-transparent focus:ring-0" placeholder="Description..."></textarea>
       
        <div class="bg-gray-lighter pt-14 ">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal ">
                    Select a file
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>

        <button type="submit" class="uppercase mt-14 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Submit Post</button>
        </form>

        @if ($errors->any())
            <div class=" mt-4 text-left">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 "> 
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


@endSection

