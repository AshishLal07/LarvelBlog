@extends('layouts.app')

@section('content')

<div class="background-img grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold shadow-md pb-14">Do you want to become developer</h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase"> Read More</a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200 ">
            <div>
                <img src="https://images.unsplash.com/photo-1607705703571-c5a8695f18f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" width="700" alt="">

            </div>
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-bold text-gray-600">
                    Struggling to be a better developer?
                </h2>
                <p class=" py-8 text-gray-500 text-sm"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. </p>
                <p class=" font-extrabold text-gray-600 text-sm pb-9">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="/blog" class="bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl  m-auto">Find Out More</a>
            </div>
    </div>
    <div class="text-center p-14 bg-black text-white">
        <h2 class="text-2xl pb-5 sm:text-lg">I'm an Expert...</h2>
        <span class="font-extrabold block text-4xl py-1">UX-Design</span>
        <span class="font-extrabold block text-4xl py-1">Project-Managment</span>
        <span class="font-extrabold block text-4xl py-1">Digital Stratergy</span>
        <span class="font-extrabold block text-4xl py-1">Backend Development</span>
    </div>
    <div class="text-center py-14 ">
        <span class="uppercase text-sm text-gray-400 ">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Post
        </h2>
        <p class="m-auto w-4/5 text-gray-500 ">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto  pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">PHP</span>
                <h3 class="text-xl font-bold py-10 ">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h3>
                <a href="" class="bg-transparent border-2 border-gray-100 text-gray-100 font-extrabold text-xs py-3 px-5 rounded-3xl">Find Out More</a>
            </div>
            
        </div>
        <div >
            <img class="h-full" src="https://images.unsplash.com/photo-1509718443690-d8e2fb3474b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"  width="700" alt="">

            </div>
    </div>
      
       
@endsection
