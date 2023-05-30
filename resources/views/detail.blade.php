@extends('layout.master')

@section('title')
    Detail
@endsection

@section('content')
    <div class="mx-8">
        <h1 class="text-2xl">{{ $posts->title }}</h1>
        <h1>{{ $posts->category }}</h1>
        <img src="{{ $posts->image }}" alt="">
        <p>{{ $posts->desc }}</p>
    </div>
@endsection
