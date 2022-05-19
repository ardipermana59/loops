@extends('layouts.app')
@section('content')
    <div class="row container-fluid mx-auto">

        @forelse($posts as $post)
            <div class="col-md-4" style="padding: 10px">
                <div class="card">
                    <img class="card-img-top" src="https://i.picsum.photos/id/1/5616/3744.jpg?hmac=kKHwwU8s46oNettHKwJ24qOlIAsWN9d2TtsXDoCWWsQ" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{!! Str::limit($post->content, 120) !!}</p>
                        <a href="{{ route('post.detail', ['post' => $post->id]) }}" class="card-link float-right">Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No posts yet.</p>
        @endforelse

    </div>
    {{ $posts->links() }}
@endsection
