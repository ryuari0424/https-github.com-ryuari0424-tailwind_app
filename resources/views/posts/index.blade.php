@extends('layouts.base')

@section('content')
    <header>
        <x-navbar :user=$user />
    </header>

    <main class="m-0 bg-primary">
        @foreach ($posts as $post)
            <div class="container pt-4 mt-4">
                <div class="mx-auto card w-96 shadow-x bg-white">
                    <div class="card-body pb-0 mt-3">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="truncate">{{ $post->text }}</p>
                        <div class="card-actions justify-end">
                            @if ($post->user_id == Auth::user()->id)
                                <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">削除</button>
                                </form>
                            @endif
                        </div>
                        <div class="flex justify-end mt-2">
                            <img class="rounded-lg w-8 h-8" src="{{ Storage::url($post->user->image) }}" alt="">
                            <span class="block align-middle">:{{ $post->user->name }}</span>
                        </div>
                        <div class="card-actions justify-end flex flex-row">
                            <div class="">{{ $post->created_at }}</div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
