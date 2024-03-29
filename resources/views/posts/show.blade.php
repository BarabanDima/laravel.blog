@extends('layouts.layout')

@section('title', 'Markedia - Marketing Blog Template :: ' . $post->title)

@section('content')

    <div class="page-wrapper">
        <div class="blog-title-area">
            <ol class="breadcrumb hidden-xs-down">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a>
                </li>
                <li class="breadcrumb-item active">{{ $post->title }}</li>
            </ol>

            <span class="color-yellow"><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}"
                    title="">{{ $post->category->title }}</a></span>

            <h3>{{ $post->title }}</h3>

            <div class="blog-meta big-meta">
                <small>{{ $post->getPostDate() }}</small>
                <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
            </div><!-- end meta -->

            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span
                                class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span
                                class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end post-sharing -->
        </div><!-- end title -->

        <div class="single-post-media">
            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
        </div><!-- end media -->

        <div class="blog-content">
            {!! $post->content !!}
        </div><!-- end content -->

        <div class="blog-title-area">
            @if ($post->tags->count())
                <div class="tag-cloud-single">
                    <span>Tags</span>
                    @foreach ($post->tags as $tag)
                        <small><a href="{{ route('tags.single', ['slug' => $tag->slug]) }}"
                                title="">{{ $tag->title }}</a></small>
                    @endforeach
                </div><!-- end meta -->
            @endif
        </div><!-- end title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="custombox clearfix">
            <h4 class="small-title">Комментарии</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="comments-list">
                        @foreach ($comments as $comment)
                            <div class="media">
                                <div class="media-body">
                                    <h4>{{ $comment->name }}</h4>
                                    <p><i>{{ $comment->comment }}</i></p>
                                    <a href="#" class="btn btn-primary btn-sm">Ответить</a>
                                </div>
                            </div>
                        @endforeach

                        {{ $comments->links() }}

                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end custom-box -->

        <hr class="invis1">

        <div class="custombox clearfix">
            <h4 class="small-title">Отсавить комментарий</h4>
            @if (Auth::check())
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="/posts/{{ $post->id }}/comments">
                            {{ csrf_field() }}

                            {{-- <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div> --}}

                            <div class="form-group">
                                <label for="comment">Ваш комментарий</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                    </div>
                </div>
            @else
                <div class="row">
                    <span>Чтобы оставить комментарий, необходимо <a href="{{ route('login') }}">авторизоваться</a></span>
                </div>
            @endif

        </div>
    </div><!-- end page-wrapper -->

@endsection
