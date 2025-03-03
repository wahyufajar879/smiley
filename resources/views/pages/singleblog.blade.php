@extends('layouts.app')

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                              <div class="breadcrumb_iner_item text-center">
                                    <h2>blog details</h2>
                                    <p>home . blog details</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      </section>
      <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            @if($blog->image)
                            <img class="card-img rounded-0" src="{{ asset('/blog_images/' . $blog->image) }}" alt="{{ $blog->title }}">
                        @else
                            <img class="card-img rounded-0" src="{{ asset('assets/img/default_blog.png') }}" alt="Default Image">
                        @endif
                        </div>
                        <div class="blog_details">
                            <h2>{{ $blog->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> {{ $blog->category }}</a></li>
                                <li><a href="#"><i class="far fa-calendar"></i> {{ $blog->date }}</a></li>
                            </ul>
                            <p class="excert">
                                {{ $blog->description }}
                            </p>
                        </div>
                    </div>
    </section>
    <!--================ Blog Area end =================-->
@endsection