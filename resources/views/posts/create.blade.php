@extends('layouts.base')

@section('content')
    <header>
        <x-navbar :user=$user />
    </header>

    <main class="bg-base-200">
        <div class="hero min-h-screen">
            <div class="hero-content flex-col">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-bold">ブログ投稿フォーム!</h1>
                </div>

                <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="form-control">

                                <label class="label">
                                    <span class="label-text textarea-bordered">title</span>
                                </label>
                                <input name="title" type="text" placeholder="title" class="input input-bordered inut-primary" />
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">content</span>
                                </label>
                                <textarea name="text" class="textarea textarea-primary" placeholder="内容を入れて"></textarea>
                                @error('text')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-control mt-6">
                                <button type="submit" class="btn btn-primary">投稿</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
