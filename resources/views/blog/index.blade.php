@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
    <div class="w-4/5 m-auto text-center bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="py-1 font-bold">{{session()->get('message')}}</p>
          </div>
        </div>
      </div>
    @endif

    @if(Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold px-4 py-3 rounded-3xl" >
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="images/{{$post->image_path}}" width="700" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{$post->title}}
                </h2>
                <span class="text-gray-500">
                    By<span class="font-bold italic text-gray-800"> {{$post->user->name}}</span>
                    , Created on {{date('jS M Y', strtotime($post->updated_at))}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->description}}
                </p>

                <a href="/blog/{{$post->slut}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Keep Reading
                </a>
            </div>
        </div>
    @endforeach
@endsection