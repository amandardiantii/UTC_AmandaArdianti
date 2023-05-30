@extends('layout.master')

@section('title')
Home
@endsection

@section('content')
    <div class="">
        {{-- HIGHLGHT --}}
        <div class="w-auto border-solid border-4 border-light-blue-500 p-5 mx-8">
            <a href="/detail/{{ $highlight->id }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $highlight->image }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $highlight->title }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $highlight->desc }}</p>
                </div>
            </a>
        </div>
        {{-- LATEST BOOK REVIEW --}}
        <div class="w-auto border-solid border-4 border-light-blue-500 p-5 mx-8">
            <h1 class="mx-8">LATEST BOOK REVIEW</h1>
            <div class="grid grid-cols-4 gap-4 mx-8">
                @foreach ($news as $new)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/detail/{{ $new->id }}">
                        <img class="rounded-t-lg" src="{{ $new->image }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/detail/{{ $new->id }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $new->title }}</h5>
                        </a>
                        <a href="/detail/{{ $new->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read Post
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- BOOK SERIES REVIEW --}}
        <div class="border-solid border-4 border-light-blue-500 p-5 mx-8">
            <h1 class="mx-8">Book Series Review</h1>
            <div class="grid grid-cols-3 gap-4 mx-8">
            @foreach ($posts as $post)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="/detail/{{ $post->id }}">
                            <img class="rounded-t-lg" src="{{ $post->image }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/detail/{{ $post->id }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            </a>
                            <a href="/detail/{{ $post->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read Post
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>
    </div>

@endsection
