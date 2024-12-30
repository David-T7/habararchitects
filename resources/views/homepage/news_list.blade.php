@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">News</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li class="active">News</li>
                </ul>
            </div>
        </div>
    </div>        
</div>


<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Scroll Progress -->
    
    <section class="blog">
        <div class="container">
            <div class="row">
                @foreach ($newses as $news)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_post">
                            @php $images = json_decode($news->images->news_pictures,true); @endphp
                            <img src="{{ asset('/img/news/'.$news->id.'/'.$images[5]) }}" alt="img">
                            <div class="blog_content">                                    
                                <h2 class="post-count">0{{ $news->id }}</h2>
                                <div class="meta">
                                    <time class="text-olive" datetime="2024-06-20">{{ $news->created_at }}</time>
                                </div>
                                <h5><a href="#" class="text-white">{{ $news->title }}</a></h5>
                                <p>{{ Str::limit($news->description, 90, '...') }}</p>
                                <div class="details_link"><a href="{{ route('habar.news', $news->id) }}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"><span class="dot"></span></span></span></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="pagination-div">
                <ul class="pagination">
                    <li><a href="#"><i class="ion-chevron-left"></i></a></li>
                    <li><a class="page-number current" href="#">01</a></li>
                    <li><a class="page-number" href="#">02</a></li>
                    <li>...</li>
                    <li><a class="page-number" href="#">10</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </section>

</main>
@endsection