@extends('user.layouts.master')

@section('title')
    {{ $single_dish->title }}
@endsection

@section('content')
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="post-details-content mb-100">
                        <div class="blog-thumbnail mb-50">
                            <img src="{{ URL::to('storage/' . $single_dish->picture_path)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title">{{ $single_dish->title }}</h4>
                            <div class="post-meta mb-50">
                                <a href="#" class="post-date">{{ $single_dish->created_at }} </a>
                                <a href="#" class="post-author">Jana Kotikova</a> <br>
                                <span><b>Sastādvaļas:</b> {{ $single_dish->ingredients }}</span>
                            </div>

                            {!! $single_dish->description !!}
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>

                        <ol>

                            @foreach($comments as $comment)
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <div class="d-flex">
                                                <a href="#" class="post-author">{{ $comment->name }}</a>
                                                <a href="#" class="post-date">{{ $comment->created_at }}e</a>
                                                <a href="#" class="reply">{{ $comment->email }}</a>
                                            </div>
                                            <p>{{ $comment->message }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Atstāt komentāru</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="{{ route('user.leave.comment') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Vārds*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="E-pasts*">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Komentārs"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input name="recipe_id" type="hidden" value="{{ $single_dish->id }}">
                                        <input name="recipe_title" type="hidden" value="{{ $single_dish->title }}">
                                        <button class="btn bueno-btn mt-30" type="submit">Komentēt</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
