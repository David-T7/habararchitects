@extends('layouts/mainlayout')

@section('page-content')
<!-- Main Wrapper-->
<main class="wrapper">
    <div class="theme_slider_4 p-0">
        <div class="swiper swiper_theme_slider_4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('img/slider/2.jpg')">
                        <div class="container">
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{ route('habar.project', 1) }}" class="text-white text-uppercase">The Future Architecture Is Here</a></h4>
                                        <div class="details_link">
                                            <a href="{{ route('habar.about') }}">
                                                <span class="link_text">Habar Architects Details - </span>
                                                <span class="link_icon">Click Here</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mask-content" style="background-image: url('img/slider/6.jpg')">A</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('img/slider/3.jpg')">
                        <div class="container">
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{ route('habar.project', 1) }}" class="text-white text-uppercase">We value your Dream</a></h4>
                                        <div class="details_link">
                                            <a href="{{ route('habar.about') }}">
                                                <span class="link_text">Habar Architects Details - </span>
                                                <span class="link_icon">Click Here</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mask-content" style="background-image: url('img/slider/5.jpg')">D</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('img/slider/13.jpg')">
                        <div class="container">
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{ route('habar.project', 1) }}" class="text-white text-uppercase">Make true your Dream with Habar Architects</a></h4>
                                        <div class="details_link">
                                            <a href="{{ route('habar.about') }}">
                                                <span class="link_text">Habar Architects Details - </span>
                                                <span class="link_icon">Click Here</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mask-content" style="background-image: url('img/slider/14.jpg')">T</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Buttons -->
            <!-- <div class="swiper-button-prev details_link l-dir pagination-previous"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
            <div class="swiper-button-next details_link r-dir pagination-next"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div> -->
            
        </div>
    </div>
</main>
@endsection