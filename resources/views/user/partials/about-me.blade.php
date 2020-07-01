@extends('user.layouts.master')

@section('title')
    Par mani
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
                            <img src="{{ 'storage/' . $blog->picture_path}}" alt="">
                        </div>
                        <div class="blog-content">
                            {!! $blog->about_me !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
