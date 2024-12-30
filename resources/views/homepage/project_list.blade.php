@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Projects</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>
    </div>        
</div>

<!-- Main Wrapper-->
<main class="wrapper">
    <section class="projects packery bg-transparent project-grid-list">
        <div class="container">
            <div class="portfolio-filters-content">
                <div class="filters-button-group">
                    <button class="button is-checked" data-filter="*">All<sup class="filter-count"></sup></button>
                    <button class="button" data-filter=".architecture">Architecture<sup class="filter-count"></sup></button>
                    <button class="button" data-filter=".interior">Interior<sup class="filter-count"></sup></button>
                    <button class="button" data-filter=".urban">Urban<sup class="filter-count"></sup></button>
                    <button class="button" data-filter=".landscape">Landscape<sup class="filter-count"></sup></button>
                </div>
            </div>
            <div class="grid gutter-20 grid-1 clearfix"> 
                <!-- <div class="grid-sizer"></div> -->
                @foreach ($projects as $project)
                    <div class="grid-item residences">
                        <div class="thumb">
                            @php $images = json_decode($project->images->project_pictures,true); @endphp
                            <img class="item_image" src="{{ asset('/img/projects/'.$project->id.'/main/'.$images[0]) }}" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <!-- <h6><a href="#">{{ $project->code_name }}</a></h6> -->
                                    <h5><a href="#">{{ $project->title }}</a></h5>
                                    <div class="details_link"><a href="{{ route('habar.project', $project->id ?? '1') }}"><span class="link_text">View Project</span> <span class="link_icon"><span class="line"></span> <span class="circle"><span class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                          
                @endforeach
            </div>
            <div class="btn_group w-100 text-center">
                <button id="load-more" class="btn gray">Load More</button>
            </div>
        </div>
    </section>
</main>
@endsection