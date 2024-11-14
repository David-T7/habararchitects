@extends('layouts/mainlayout')

@section('page-content')
<!-- Main Wrapper-->
<main class="wrapper">
    <div class="theme_slider_2 p-0">
        <div class="swiper swiper_theme_slider_2">
            <div class="swiper-wrapper">
                @if (!$projects->isEmpty())
                    @foreach ($projects as $project)
                        <div class="swiper-slide">
                            @php $images = json_decode($project->images->project_pictures,true); @endphp
                            <div class="slider" style="background-image: url('/img/projects/{{ $project->id }}/main/{{ $images[0] }}')">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <div class="meta m-0">
                                                @foreach ($project->types ?? '' as $project_types)
                                                    <span class="text-olive">{{ $project_types }}</span>@if(!$loop->last)&nbsp;+@endif
                                                @endforeach
                                            </div>
                                            <h4>
                                                <a href="{{ route('habar.project', $project->id ?? '1' ) }}" class="text-white">
                                                    {{ $project->title }}
                                                </a>
                                            </h4>
                                            <div class="details_link">
                                                <a href="{{ route('habar.project', $project->id ?? '1' ) }}">
                                                    <span class="link_text">View Project</span> 
                                                    <span class="link_icon">
                                                        <span class="line"></span> 
                                                        <span class="circle"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Buttons -->
            <div class="swiper-navigation">
                <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
            </div>
        </div>
    </div>
</main>
@endsection