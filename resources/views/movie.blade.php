@extends('layout.layout')

@section('content')
<div class="max-h-full pb-24 my-auto bg-white dark:bg-gray-800">
    <div class="text-center p-10">
        <h1 class="font-bold text-5xl dark:text-white">Find Your Favorite <span class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500">Movie</span></h1>
    </div>
    <div class="grid grid-cols-3 gap-8 mx-10 mt-10 pb-10">
    @foreach($unique as $data)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="/movie/{{$data->movieid}}">
                <img class="rounded-t-lg w-full" src="{{$data->poster}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$data->movie}} ({{$data->year}})</h5>
                </a>
                <a href="/movie/{{$data->movieid}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection