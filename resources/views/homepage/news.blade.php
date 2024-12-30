@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">NEWS Details</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li><a href="{{ route('habar.news_list') }}">NEWS</a></li>
                    <li class="active">{{ Str::limit($news->title, 40, '...') }}</li>
                </ul>
            </div>
        </div>
    </div>        
</div>

<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Scroll Progress -->
    <section class="project-details bg-dark-200">
        <div class="container">
            <div class="row">                        
                <div class="col-lg-8 col-md-8">
                    <div class="project-details_inner">
                        <div class="post_content">
                            <div class="post-header">
                                <h3 class="post-title">{{ $news->title }}</h3>
                            </div>
                            <div class="intro">
                                <p class="mt-5 mb-5" style="text-align: justify;">
                                {!! $news->description !!}
                                </p>
                            </div>
                            <div class="fulltext">
                                <figure class="block-gallery mb-0">
                                    <ul class="blocks-gallery-grid">
                                        <li class="blocks-gallery-item mb-0 me-0">
                                            <figure>
                                                @php $images = json_decode($news->images->news_pictures,true); @endphp
                                                <a href="#"><img src="{{ asset('/img/news/'.$news->id.'/'.$images[0]) }}" alt="img" class="block-image"></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </figure>

                                <!-- <h6 class="widget-title">
                                    Project Concept
                                    <span class="title-line"></span>
                                </h6> -->
                                <p class="mt-5" style="text-align: justify;">{!! $news->exp1 !!}</p>
                                <p style="text-align: justify;">{!! $news->exp2 !!}</p>
                                <p style="text-align: justify;">{!! $news->exp3 !!}</p>
                                <p style="text-align: justify;">{!! $news->conclusion !!}</p>

                                <figure class="block-gallery mt-5">
                                    <ul class="blocks-gallery-grid">
                                        @foreach ($images as $index => $image)
                                            @if($index > 1)
                                                <li class="blocks-gallery-item">
                                                    <figure>
                                                        <img src="/img/news/{{ $news->id }}/{{ $image }}" alt="{{$news->title}}" class="block-image" id="news-image-{{ $index }}">
                                                        <!-- <div class="popup-btn"><a href="/img/newss/{{ $news->id }}/{{ $image }}" data-fancybox="images"><i class="bi bi-plus"></i></a></div> -->
                                                    </figure>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </figure>
                                
                                <!-- <ul class="point_order">
                                    <li>The talent at Mrittik runs wide and deep. Across many markets, geographies & typologies.</li>
                                    <li>Our team members are some of the finest professionals in the industry.</li>
                                    <li>Organized to deliver the most specialized service possible and enriched by the depth.</li>
                                </ul>

                                <p>
                                    Mrittik Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture, space planning and programming. Our portfolio of completed work includes highly acclaimed and award-winning projects for clients around the country. 
                                </p>

                                <p>
                                    You don’t create unforgettable spaces all over the world with a single design tool. Our expertise in drawing people together is as broad as it is deep. It draws from a variety of disciplines, each one contributing to the bigger picture and sustainable growth. More than 3,000 projects fill our portfolio, but it’s the millions of people who experience them who matter most. We’ve grouped our work into five categories: places, venues, spaces, experiences and events. Click on the images below to learn more below about the impact our projects have on communities.
                                </p>

                                <figure class="block-gallery mb-5">
                                    <ul class="blocks-gallery-grid">
                                        <li class="blocks-gallery-item mb-0 me-0">
                                            <figure>
                                                <a href="#"><img src="../assets/img/blog/details/2.jpg" alt="img" class="block-image"></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </figure>

                                <p>
                                    Mrittik Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture, space planning and programming. Our portfolio of completed work includes highly acclaimed and award-winning projects for clients around the country. 
                                </p>

                                <p>
                                    You don’t create unforgettable spaces all over the world with a single design tool. Our expertise in drawing people together is as broad as it is deep. It draws from a variety of disciplines, each one contributing to the bigger picture and sustainable growth. More than 3,000 projects fill our portfolio, but it’s the millions of people who experience them who matter most. We’ve grouped our work into five categories: places, venues, spaces, experiences and events. Click on the images below to learn more below about the impact our projects have on communities.
                                </p>

                                <div class="post-footer">
                                    <div class="post-share">
                                        <ul class="share-list">
                                            <li>Share:</li>
                                            <li class="facebook aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"><a href="#">Facebook</a></li>
                                            <li class="twitter aos-init aos-animate" data-aos="fade-up" data-aos-duration="800"><a href="#">Twitter</a></li>
                                            <li class="pinterest aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100"><a href="#">Pinterest</a></li>
                                            <li class="instagram aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400"><a href="#">Instagram</a></li>
                                            <li class="linkedin aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400"><a href="#">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </div> -->

                                <!-- <div class="comment-respond">
                                    <h3 class="comment-reply-title">Make A Comment <span class="title-line"></span></h3>
                                    <form class="comment-form" action="register.php" method="post">
                                        <p class="logged-in-as">Your email address will not be published. Required fields are marked *</p>
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Text Here*" required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="btn_group">
                                                        <input class="btn olive" type="submit" value="Submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar">
                        
                        <!-- <div class="widget widget_block widget_search">
                            <form method="get" class="wp-block-search">
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" class="wp-block-search__input" name="search" value="" placeholder="Search" required="">
                                    <button type="submit" class="wp-block-search__button"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <!-- end widget -->

                        <!-- <div class="widget widget_block">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Categories <span class="title-line"></span></h2>                                            
                                <ul class="wp-block-categories-list wp-block-categories">
                                    <li class="cat-item"><a href="#">Architecture</a></li>
                                    <li class="cat-item"><a href="#">Residence</a></li>
                                    <li class="cat-item"><a href="#">Architect</a></li>
                                    <li class="cat-item"><a href="#">Interior</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end widget -->

                        <!-- <div class="widget widget_block widget_tag_cloud">
                            <div class="wp-block-group__inner-container">
                                <h2 class="widget-title">Tags <span class="title-line"></span></h2>                                            
                                <ul class="wp-block-categories-list wp-block-categories">
                                    <p class="wp-block-tag-cloud">
                                        <a href="#" class="tag-cloud-link">Interior</a>
                                        <a href="#" class="tag-cloud-link">Design</a>
                                        <a href="#" class="tag-cloud-link">Exterior</a>
                                        <a href="#" class="tag-cloud-link">Architecture</a>
                                        <a href="#" class="tag-cloud-link">Landscape</a>
                                        <a href="#" class="tag-cloud-link">Gallery</a>
                                    </p>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection