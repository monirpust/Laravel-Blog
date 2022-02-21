@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" placeholder="Title...">
            @error('title')
                <p class="text-red-700 px-4 py-3 rounded relative">{{$message}}</p>
            @enderror
        
        <textarea placeholder="Write description..." name="description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
            @error('description')
                <p class="text-red-700 px-4 py-3 rounded relative" role="alert">{{$message}}</p>
            @enderror

        <div class="bg-gray-lighter pt-15">
            <label for="file" class="w-44 flex flex-col items-center px-2 py-2 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
            </label>
            <input id="file" type="file" name="image" class="hidden">
                @error('image')
                    <p class="text-red-700 px-4 py-3 rounded relative">{{$message}}</p>
                @enderror
        </div>

        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection