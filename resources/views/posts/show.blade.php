@extends('layouts.app')

@section('content')

@include('posts.partials.include._navigation')

<div class="row justify-content-center">
    <div class="card-body">
        <div class="mt-5">
            <h2 class="text-2xl font-bold">
                <a href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="text-sm text-gray-500">
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        Author: {{ $post->author->name }}
                    </div>
                    <div class="col-4">
                        Created: {{ $post->created_at->diffForHumans() }}
                    </div>
                </div>
            </p>
            <p class="mt-2">
                {{ $post->excerpt }}
            </p>
        </div>

        <div class="row justify-content-center">
            <h3 class="text-3xl">
                {{ $post->body }}
            </h3>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="card-body">
        <p class="text-sm text-gray-500">

            <div class="col-md-4">
                Author: {{ $post->author->name }}
            </div>
            <div class="col-md-4">
                Address: {{ $post->author->address }}
            </div>
            <div class="col-4">
                website: {{ $post->author->website }}
            </div>
            <div class="col-4">
                Company: {{ $post->author->company }}
            </div>
            <div class="col-4">
                Phone: {{ $post->author->phone }}
            </div>
        </p>
    </div>


    <div>
        <a href="{{ route('posts.index') }}" class="ms-n3">Back to Posts</a>
    </div>
</div>

@endsection
