@extends('layouts.app')

@section('content')
    @if ($posts->isNotEmpty())

        @include('posts.partials.include._navigation')

        <div class="row">
            @foreach ($posts as $post)
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
            @endforeach
        </div>

    @else

        @include('posts.partials.include._navigation')

        <div class="row justify-content-center">
            <div class="mt-4">
                <div class="mt-5">
                    <h2 class="text-2xl font-bold">
                        No posts yet.
                    </h2>
                </div>
            </div>
        </div>

    @endif

@endsection
