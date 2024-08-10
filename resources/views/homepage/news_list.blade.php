@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Blog</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li class="active">Blog</li>
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

                <div class="col-lg-4 col-md-6">
                    <div class="blog_post">
                        <img src="../assets/img/blog/1.jpg" alt="img">
                        <div class="blog_content">                                    
                            <h2 class="post-count">01</h2>
                            <div class="meta">
                                <time class="text-olive" datetime="2024-06-20">June 20, 2024</time>
                            </div>
                            <h5><a href="#" class="text-white">Recent trends in designing space interiors 2019</a></h5>
                            <p>Lorem ipsum dolor sit amet consecteur adipiscing elitsed do eiusmod tempor incididunt labo dolore magnaaliqua. Ut eni ad minim veniam dolor sit amet consecteur.....</p>
                            <div class="details_link"><a href="#"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"><span class="dot"></span></span></span></a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="pagination-div">
                <ul class="pagination">
                    <li><a href="#"><i class="ion-chevron-left"></i></a></li>
                    <li><a class="page-number current" href="#">01</a></li>
                    <li><a class="page-number" href="#">02</a></li>
                    <li>...</li>
                    <li><a class="page-number" href="#">10</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

</main>
@endsection