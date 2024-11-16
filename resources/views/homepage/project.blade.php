@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Project Details</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li><a href="{{ route('habar.project_list') }}">Projects</a></li>
                    <li class="active">{{ $project->title }}</li>
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
                    <div class="post-image">
                        @php $images = json_decode($project->images->project_pictures,true); @endphp
                        <img src="/img/projects/{{ $project->id }}/main/{{ $images[0] }}" alt="image">
                    </div>
                    <div class="project-details_inner">
                        <div class="post_content">
                            <div class="post-header">
                                <h3 class="post-title">{{ $project->title }}</h3>
                            </div>
                            <div class="fulltext">
                                <p style="text-align: justify;">
                                    {{ $project->description }}
                                </p>
                                <figure class="block-gallery mb-0">
                                    <ul class="blocks-gallery-grid">
                                        <li class="blocks-gallery-item mb-0 me-0">
                                            <figure>
                                                <img src="/img/projects/{{ $project->id }}/{{ $images[1] }}" alt="img" class="block-image">
                                            </figure>
                                        </li>
                                    </ul>
                                </figure>

                                <!-- <h6 class="widget-title">
                                    Project Features
                                    <span class="title-line"></span>
                                </h6>
                                <p>We design with people in mind and use every expertise at our disposal.Our practice connects communities and is committed to the stewardship of place, people, and the environment.</p>
                                <ul class="point_order">
                                    <li>The talent at Habar runs wide and deep. Across many markets, geographies & typologies.</li>
                                    <li>Our team members are some of the finest professionals in the industry.</li>
                                    <li>Organized to deliver the most specialized service possible and enriched by the depth.</li>
                                </ul> -->

                                <figure class="block-gallery mt-5">
                                    <ul class="blocks-gallery-grid">
                                        @foreach ($images as $index => $image)
                                            @if($index > 1)
                                                <li class="blocks-gallery-item">
                                                    <figure>
                                                        <img src="/img/projects/{{ $project->id }}/{{ $image }}" alt="img" class="block-image">
                                                        <!-- <div class="popup-btn"><a href="/img/projects/{{ $project->id }}/{{ $image }}" data-fancybox="images"><i class="bi bi-plus"></i></a></div> -->
                                                    </figure>
                                                </li>
                                            @endif
                                        @endforeach
                                        
                                    </ul>
                                </figure>

                                <!-- <p>
                                    Habar Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture, space planning and programming. Our portfolio of completed work includes highly acclaimed and award-winning projects for clients around the country. 
                                </p>

                                <p>
                                    You don’t create unforgettable spaces all over the world with a single design tool. Our expertise in drawing people together is as broad as it is deep. It draws from a variety of disciplines, each one contributing to the bigger picture and sustainable growth. More than 3,000 projects fill our portfolio, but it’s the millions of people who experience them who matter most. We’ve grouped our work into five categories: places, venues, spaces, experiences and events. Click on the images below to learn more below about the impact our projects have on communities.
                                </p> -->

                                <div class="post-footer">
                                    <nav class="d-flex align-items-center justify-content-between">
                                        <div class="details_link l-dir pagination-previous"><a href="{{ $previousProjectId ? route('habar.project', ($project->id - 1)) : '#' }}"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                        <div class="page-all"><a href="#"><i class="bi bi-grid"></i></a></div>
                                        <div class="details_link r-dir pagination-next"><a href="{{ $nextProjectId ? route('habar.project', ($project->id + 1)) : '#' }}"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </nav>
                                </div>
                            </div>

                            <!-- <div class="related-posts">
                                <h6 class="widget-title mb-2">
                                    More Projects
                                    <span class="title-line"></span>
                                </h6>
                                <div class="grid grid-3 gutter-15 clearfix"> 
                                    <div class="grid-sizer"></div>                          
                                    <div class="grid-item residences">
                                        <div class="thumb">
                                            <img class="item_image" src="/img/portfolio/4.jpg" alt="">
                                            <div class="works-info">
                                                <div class="label-text">
                                                    <h5><a href="project-details.html">California young menz club</a></h5>
                                                    <h6><a href="#">Club House</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                          
                                    <div class="grid-item interiors"> 
                                        <div class="thumb">
                                            <img class="item_image" src="/img/portfolio/2.jpg" alt="">
                                            <div class="works-info">
                                                <div class="label-text">
                                                    <h5><a href="project-details.html">California young menz club</a></h5>
                                                    <h6><a href="#">Club House</a>, <a href="#">Interior</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                      
                                    <div class="grid-item residences"> 
                                        <div class="thumb">
                                            <img class="item_image" src="/img/portfolio/3.jpg" alt="">
                                            <div class="works-info">
                                                <div class="label-text">
                                                    <h5><a href="project-details.html">California young menz club</a></h5>
                                                    <h6><a href="#">Club House</a>, <a href="#">Interior</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar">
                        <div class="project-information">
                            <h6 class="widget-title">
                                Project Information
                                <span class="title-line"></span>
                            </h6>
                            <ul>
                                <li>
                                    <span class="data">Project Title:</span> <span class="value">{{ $project->title }}</span>
                                </li>
                                <li>
                                    <span class="data">Client:</span> <span class="value">{{ $project->client }}</span>
                                </li>
                                <li>
                                    <span class="data">Typology:</span> <span class="value">{{ $project->types[0] ?? '' }}</span>
                                </li>
                                <li>
                                    <span class="data">Size:</span> <span class="value">{{ $project->story_num }}</span>
                                </li>
                                <li>
                                    <span class="data">Collaboration:</span> <span class="value">{{ $project->collaborators }}</span>
                                </li>
                                <li>
                                    <!-- <span class="data">Scope:</span> <span class="value">{{ $project->types[0] }}</span> -->
                                </li>
                                <li>
                                    <span class="data">Year:</span> <span class="value">{{ $project->year }}</span>
                                </li>
                                <li>
                                    <span class="data">Location:</span> <span class="value">{{ $project->city }}, {{ $project->country }}</span>
                                </li>
                                
                            </ul>

                            <div class="project-share">
                                <ul>
                                    <li>Share:</li>
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                    <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection