
@extends('layouts/mainlayout')

@section('page-content')

    <!-- Page Header -->
    <div class="page_header">
        <div class="page_header_inner">
            <div class="container">
                <div class="page_header_content d-flex align-items-center justify-content-between">
                    <h2 class="heading">Projects</h2>

                    <ul class="breadcrumb d-flex align-items-center">
                        <li>
                            <a href="{{ route('habar.home') }}">Home</a>
                        </li>
                        <li class="active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <main class="wrapper">
        <section class="projects packery bg-transparent project-grid-list">
            <div class="container">

                <!-- Project Filters -->
                <div class="portfolio-filters-content">
                    <div class="filters-button-group">
                        <button class="button is-checked" data-filter="*">
                            All
                            <sup class="filter-count"></sup>
                        </button>

                        <button class="button" data-filter=".architecture">
                            Architecture
                            <sup class="filter-count"></sup>
                        </button>

                        <button class="button" data-filter=".interior">
                            Interior
                            <sup class="filter-count"></sup>
                        </button>

                        <button class="button" data-filter=".urban">
                            Urban
                            <sup class="filter-count"></sup>
                        </button>

                        <button class="button" data-filter=".landscape">
                            Landscape
                            <sup class="filter-count"></sup>
                        </button>
                    </div>
                </div>

                <!-- Projects Grid -->
                <div class="grid gutter-20 grid-1 clearfix">

                    <!-- Grid Sizer -->
                    <!-- <div class="grid-sizer"></div> -->

                    @forelse ($projects as $project)

                        @php
                            $images = json_decode(
                                $project->images?->project_pictures ?? '[]',
                                true
                            ) ?? [];

                            $mainImage = $images[0] ?? null;

                            $imagePath = $mainImage
                                ? asset('img/projects/' . $project->id . '/main/' . $mainImage)
                                : null;

                            $projectTypes = $project->types ?? [];

                            if (is_string($projectTypes)) {
                                $projectTypes = json_decode($projectTypes, true) ?? [];
                            }

                            $filterClasses = collect($projectTypes)
                                ->map(fn ($type) => strtolower(trim($type)))
                                ->filter()
                                ->map(fn ($type) => preg_replace('/[^a-z0-9_-]/', '', $type))
                                ->implode(' ');
                        @endphp

                        <div class="grid-item {{ $filterClasses ?: 'residences' }}">
                            <div class="thumb">

                                @if ($imagePath)
                                    <img
                                        class="item_image"
                                        src="{{ $imagePath }}"
                                        alt="{{ $project->title }}"
                                        loading="lazy"
                                    >
                                @else
                                    <div class="item_image project-image-placeholder">
                                        <span>No image available</span>
                                    </div>
                                @endif

                                <div class="works-info">
                                    <div class="label-text">

                                        <h5>
                                            <a href="{{ route('habar.project', $project->id) }}">
                                                {{ $project->title }}
                                            </a>
                                        </h5>

                                        <div class="details_link">
                                            <a href="{{ route('habar.project', $project->id) }}">
                                                <span class="link_text">
                                                    View Project
                                                </span>

                                                <span class="link_icon">
                                                    <span class="line"></span>
                                                    <span class="circle">
                                                        <span class="dot"></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    @empty

                        <div class="col-12 text-center">
                            <h4>No projects available.</h4>
                            <p>Please check back later for our projects.</p>
                        </div>

                    @endforelse

                </div>

                <!-- Load More Button -->
                @if ($projects->count() > 0)
                    <div class="btn_group w-100 text-center">
                        <button id="load-more" class="btn gray" type="button">
                            Load More
                        </button>
                    </div>
                @endif

            </div>
        </section>
    </main>

@endsection
