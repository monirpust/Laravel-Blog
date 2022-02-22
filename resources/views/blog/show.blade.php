<base href="/public">
@extends('layouts.app')

@section('content')
<div class="gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <h2 class="text-gray-700 font-bold text-5xl pb-4">
        {{$post->title}}
    </h2>
    <div>
        <img src="images/{{$post->image_path}}" width="700" alt="">
    </div>
    <div>
        <br>
        <span class="text-gray-500">
            By<span class="font-bold italic text-gray-800 "> {{$post->user->name}}</span>
            , Created on {{date('jS M Y', strtotime($post->updated_at))}}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{$post->description}}
        </p>
    </div>
</div>
@endsection