
@extends('layouts/mainlayout')

@section('page-content')
    <!-- Main Wrapper -->
    <main class="wrapper">
        <div class="theme_slider_2 p-0">
            <div class="swiper swiper_theme_slider_2">
                <div class="swiper-wrapper">

                    @if (!$projects->isEmpty())
                        @foreach ($projects as $project)

                            @php
                                $images = json_decode(
                                    $project->images?->project_pictures ?? '[]',
                                    true
                                ) ?? [];

                                $mainImage = $images[0] ?? null;
                            @endphp

                            <div class="swiper-slide">
                                <div
                                    class="slider"
                                    @if ($mainImage)
                                        style="background-image: url('{{ asset("img/projects/{$project->id}/main/{$mainImage}") }}')"
                                    @endif
                                >
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                            <div class="slide_content_inner">

                                                <!-- Project Types -->
                                                <div class="meta m-0">
                                                    @foreach (($project->types ?? []) as $projectType)
                                                        <span class="text-olive">
                                                            {{ $projectType }}
                                                        </span>@if (!$loop->last)&nbsp;+@endif
                                                    @endforeach
                                                </div>

                                                <!-- Project Title -->
                                                <h4>
                                                    <a
                                                        href="{{ route('habar.project', $project->id) }}"
                                                        class="text-white"
                                                    >
                                                        {{ $project->title }}
                                                    </a>
                                                </h4>

                                                <!-- View Project Link -->
                                                <div class="details_link">
                                                    <a href="{{ route('habar.project', $project->id) }}">
                                                        <span class="link_text">
                                                            View Project
                                                        </span>&nbsp;

                                                        <span class="link_icon">
                                                            <span class="line"></span>&nbsp;
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
                    @else
                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <h4>No projects available.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation Buttons -->
                <div class="swiper-navigation">
                    <div class="swiper-button-prev">
                        <i class="bi bi-arrow-left"></i>
                    </div>

                    <div class="swiper-button-next">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
