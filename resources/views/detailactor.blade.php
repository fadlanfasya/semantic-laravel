@extends('layout.layout')

@section('content')

<div class="m-4 bg-white dark:bg-gray-800 shadow overflow-hidden">
@foreach($justid as $data)
    <div class="text-center p-10">
        <h1 class="font-bold text-5xl dark:text-white">Hi This Is <span class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500">{{$data->name}}</span> !</h1>
    </div>
  <div class="mx-4 bg-white dark:bg-gray-800">
    <div class="flex bg-white justify-center mb-4 md:flex-row dark:bg-gray-800">
        <img class=" w-full h-96 md:h-auto md:w-48" src="{{$data->image}}" alt="">
    </div>
    <dl>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Full Name</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">{{$data->name}}</dd>
      </div>
      <div class="bg-white dark:bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Birth Date</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">{{$data->born}}</dd>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Birth Place</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">{{$data->city}}, {{$data->country}}</dd>
      </div>
@endforeach
      <div class="bg-white dark:bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Movie List</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
        @foreach($role as $data)
          <ul class="py-2">
            <li><a href="/movie/{{$data->movieid}}">{{$data->movie}}</a> ({{$data->year}}) as {{$data->charactername}}</li>
          </ul>
          @endforeach
        </dd>
      </div>
    </dl>
  </div>
</div>
@endsection