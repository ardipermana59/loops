@extends('layouts.app')
@section('content')
    <div class="container-fluid mx-auto">
        <div class="col-md-10 offset-md-1">
            <div class="card p-5">
                <h2 class="mb-5 text-center">{{ $post->title }}</h2>
                <div class="mx-auto mb-5" style="width: 34rem;">
                    <img src="https://i.picsum.photos/id/1/5616/3744.jpg?hmac=kKHwwU8s46oNettHKwJ24qOlIAsWN9d2TtsXDoCWWsQ"
                        class="img-fluid rounded" style="height: 50%">
                </div>
                <div>
                    {!! $post->content !!}
                </div>
            </div>
        </div>

        <div class="col-md-10 offset-md-1">
            <p class="mt-3">{{ count($post->comments) }} Komen</p>
            <div class="card">
                <ul class="list-unstyled">
                    @forelse($post->comments as $comment)
                        <li class="media px-4 pt-4">
                            <img class="mr-3 rounded-circle"
                                src="https://static.vecteezy.com/system/resources/previews/002/275/847/original/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg"
                                style="width: 4rem;" alt="Generic placeholder image">
                            <div class="media-body border-bottom pb-4">
                                <h5 class="mt-0 mb-1 font-weight-bold">{{ $comment->name }}</h5>
                                <div class="text-muted">{{ $comment->created_at->diffForHumans()}}</div>
                                {{ $comment->comment }}
                            </div>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <p class="mt-3">Tambah Komen</p>
            <div class="card">
                <form class="p-4" method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <input type="text" name="post_id" value="{{$post->id}}" hidden>
                    <div class="row form-group">
                        <div class="col">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama lengkap" value="@auth {{ auth()->user()->name }} @else {{ old('name') }} @endauth" @auth readonly @endauth>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message}}
                              </div>
                              @enderror
                        </div>
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email anda" value="@auth {{ auth()->user()->email }} @else {{ old('email') }} @endauth" @auth readonly @endauth>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message}}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" placeholder="Masukan website anda" name="website" value="{{ old('website') }}">
                        @error('website')
                            <div class="invalid-feedback">
                                {{ $message}}
                              </div>
                              @enderror
                    </div>

                    <div class="form-group">
                        <label for="comment">Komen</label>
                        <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" rows="3" placeholder="Komen anda" name="comment" >{{ old('comment') }}</textarea>
                        @error('comment')
                            <div class="invalid-feedback">
                                {{ $message}}
                              </div>
                              @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Komen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
