@extends('layouts.app')
@section('content')
    <div class="background grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to be a Laravel Developer?
                </h1>
                <a 
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4
                font-bold text-xl uppercase"
                >
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822__340.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Working to be a better developer?
            </h2>

            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni et omnis quae nobis asperiores quidem! Quasi quam quod quibusdam .
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Backend Develper
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppsercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis mollitia? placeat minima quae odit quam dolorum.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span>
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis saepe dolor qui quod quia excepturi, sequi laboriosam velit veniam aliquid! Laboriosam sed reprehenderit vitae harum ullam dolor perferendis eius corporis.
                </h3>

                <a href="" class="uppercase bg-transparent border-2 border-gray-100 font-exptrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>

        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822__340.jpg" width="700" alt="">
        </div>
    </div>
@endsection