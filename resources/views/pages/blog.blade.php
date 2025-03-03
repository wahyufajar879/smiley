@extends('layouts.app')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>blog</h2>
                        <p>home . blog</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($blogs as $blog)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                {{-- <div class="blog_img"> --}}
                                @if($blog->image)
                                    <img class="card-img rounded-0" src="{{ asset('/blog_images/' . $blog->image) }}" alt="{{ $blog->title }}">
                                @else
                                    <img class="card-img rounded-0" src="{{ asset('assets/img/default_blog.png') }}" alt="Default Image">
                                @endif
                                <a href="#" class="blog_item_date">
                                    <h3>{{ date('d', strtotime($blog->date)) }}</h3>
                                    <p>{{ date('M', strtotime($blog->date)) }}</p>
                                </a>
                                {{-- </div> --}}
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('singleblog', ['id' => $blog->id]) }}">
                                    <h2>{{ $blog->title }}</h2>
                                </a>
                                <p>{{ Str::limit($blog->description, 200) }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> {{ $blog->category }}</a></li>
                                    {{-- <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li> --}}
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                @endif
                        
                                @foreach ($blogs->getUrlRange(max($blogs->currentPage() - 3, 1), min($blogs->currentPage() + 3, $blogs->lastPage())) as $page => $url)
                                    <li class="page-item {{ $blogs->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                        
                                @if ($blogs->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route('blog.search') }}" method="GET">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            name="search" value="{{ request('search') }}" 
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach($categories as $category)
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>{{ $category->category }}</p>
                                        <p>({{ $category->total }})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach($recentPosts as $post)
                            <div class="media post_item">
                                @if($post->image)
                                    <img src="{{ asset('/blog_images/' . $post->image) }}" alt="{{ $post->title }}">
                                @else
                                    <img src="{{ asset('assets/img/default_blog.png') }}" alt="Default Image">
                                @endif
                                <div class="media-body">
                                    <a href="{{ route('singleblog', ['id' => $post->id]) }}">
                                        <h3>{{ $post->title }}</h3>
                                    </a>
                                    <p>{{ date('F d, Y', strtotime($post->date)) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
@endsection