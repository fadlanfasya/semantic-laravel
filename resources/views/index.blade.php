@extends('layout.layout')

@section('content')
<div>
<!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-center md:max-w-none md:text-center">
        <h1 class="mt-[21px] text-5xl font-extrabold leading-10 tracking-tight text-center text-gray-900 dark:text-white md:text-center sm:leading-none md:text-6xl lg:text-7xl">
            <span class="inline md:block">Get Data</span>
            <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Your Favorite Actor</span>
        </h1>
        <div class="mx-auto mt-5 mb-10 text-center text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">
            Find your favorite hollywood actor and actress.
            Explore their bio, their movie, and their relation.
        </div>
        <form method="POST" action="/search">
            @csrf
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Actor.." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
        </form>
    </div>
        <!-- End Main Hero Content -->
</div>
@endsection