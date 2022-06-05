@extends('layout.layout')

@section('content')
<div class="m-4 bg-white dark:bg-gray-800 shadow overflow-hidden">
@foreach($justid as $data)
    <div class="p-10 text-center">
        <h1 class="font-bold text-5xl dark:text-white">Hi This Is <span class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500">{{$data->movie}}</span> !</h1>
    </div>
  <div class="mx-4 bg-white items-center dark:bg-gray-800">
    <div class="flex bg-white justify-center mb-4 md:flex-row dark:bg-gray-800">
        <iframe width="600" height="350" src="{{$data->trailer}}"></iframe>
    </div>
    
    <dl>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Movie Title</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">{{$data->movie}}</dd>
      </div>
      <div class="bg-white dark:bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Release Year</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">{{$data->year}}</dd>
      </div>
@endforeach
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Actor List</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
          @foreach($unique as $data)
          <ul class="py-2">
            <li><a href="/actor/{{$data->actorid}}">{{$data->name}}</a> as {{$data->charactername}}</li>
          </ul>
          @endforeach
        </dd>
      </div>
    </dl>
  </div>
</div>
@endsection