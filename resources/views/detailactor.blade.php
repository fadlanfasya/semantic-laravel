@extends('layout.layout')

@section('content')

<div class="m-4 bg-white dark:bg-gray-800 shadow overflow-hidden">
@foreach($ids as $data)
    <div class="text-center p-10">
        <h1 class="font-bold text-5xl dark:text-white">Hi This Is <span class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500">{{$data->name}}</span> !</h1>
    </div>
  <div class="mx-4 bg-white dark:bg-gray-800">
    <div class="flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl dark:bg-gray-800">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
    </div>
    <dl>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Full name</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">Margot Foster</dd>
      </div>
      <div class="bg-white dark:bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Application for</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">Backend Developer</dd>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Email address</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">margotfoster@example.com</dd>
      </div>
      <div class="bg-white dark:bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">Salary expectation</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">$120,000</dd>
      </div>
      <div class="bg-gray-50 dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 dark:text-white">About</dt>
        <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
      </div>
    </dl>
  </div>
@endforeach
</div>
@endsection