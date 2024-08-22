@extends('layouts/mainlayout')

@section('page-content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Scroll Progress -->
    
    <!-- Our Mission -->
    <section class="mission">
        <div class="container">         
            <div class="mission_top_part">
                <div class="section-header text-center">
                    <h6 class="text-white text-uppercase">About Us</h6>
                    <p class="text-gray-600">Let's combine your ideas and our expertise.</p>
                </div>
                <div class="has_line"></div>
                <img src="/img/bg/about_bg.jpg" alt="">
            </div>

            <div class="mission_bottom_part">
                <div class="row justify-content-center">
                    <div class="col-lg-4 pe-lg-4">
                        <div class="section-header">
                            <h3 class="text-white text-uppercase border-line">Each member of our team will bring a set of unique and exceptional skills to your project</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <div class="mission_content">
                            <p>Our architects have extensive experience with a wide array of project types ranging from multi-million dollar facilities to smaller tenant finishes. 
                                Whether it’s new construction, renovation or remodel, our professionals understand the intricacies and specific characteristics that each type of structure demands. 
                                As with all of our projects, Fusion Architects will approach yours with an innovative eye, integration of technology, preservation of existing elements when desired, and attention to sustainability.</p>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>

    <div class="video-block" data-aos="zoom-in" data-aos-duration="500">
        <div class="container">
            <div class="video_post">
                <div class="ytube_video">
                    <iframe id="ytvideo" src="" allow="autoplay;" allowfullscreen></iframe>
                    <div class="post_content">
                        <div class="ytplay_btn"><i class="bi bi-play-fill"></i></div>
                        <img src="/img/bg/video_bg.jpg" alt="video">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="funfacts pd-top-lg bg_2" id="funfacts">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="funfacts_inner">
                        <div class="funfact2 d-flex align-items-center">
                            <div class="fun_img">
                                <img src="/img/fact-1.png" alt="img">
                            </div>
                            <div class="funfact_content">
                                <p>Project Completed</p>
                                <div class="d-flex align-items-center"><h2 class="fun-number">120</h2></div>                                
                            </div>
                        </div>                            
                        <div class="funfact2 d-flex align-items-center">
                            <div class="fun_img">
                                <img src="/img/fact-2.png" alt="img">
                            </div>
                            <div class="funfact_content">
                                <p>Design Projects</p>
                                <div class="d-flex align-items-center"><h2 class="fun-number">210</h2><span>+</span></div>
                            </div>
                        </div>                            
                        <div class="funfact2 d-flex align-items-center">
                            <div class="fun_img">
                                <img src="/img/fact-3.png" alt="img">
                            </div>
                            <div class="funfact_content">
                                <p>Employees</p>
                                <div class="d-flex align-items-center"><h2 class="fun-number">15</h2></div>
                            </div>
                        </div>                            
                        <div class="funfact2 d-flex align-items-center">
                            <div class="fun_img">
                                <img src="/img/fact-4.png" alt="img">
                            </div>
                            <div class="funfact_content">
                                <p>Project Running</p>
                                <div class="d-flex align-items-center"><h2 class="fun-number">62</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services inner pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                    <div class="icon_box">
                        <h6>01</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Urban Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                    <div class="icon_box">
                        <h6>02</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Interior Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                    <div class="icon_box">
                        <h6>03</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Landscape Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100">
                    <div class="icon_box">
                        <h6>04</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Landscape Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1300">
                    <div class="icon_box">
                        <h6>05</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Urban Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon_box">
                        <h6>06</h6>
                        <img src="/img/icon_box/d1.svg" alt="Icon Box">
                        <h4 class="text-white"><a href="#">Interior Design</a></h4>
                        <p class="text-gray-600">Habar Architects Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident enim numquam recusandae nobis corporis mollitia deleniti quaerat cum cumque aperiam dicta, maiores quos eveniet? Vitae eum suscipit quisquam dolore non.</p>
                        <div class="arrow_effect">
                            <a href="#"><span class="crossline1"></span><span class="crossline2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="highlight_banner bg-dark-200">
        <div class="container">
            <div class="row justify-content-center" data-aos="flip-up" data-aos-duration="500">
                <div class="col-lg-11 p-lg-0">
                    <p class="about_para text-center">WE OFFER A <span><a href="#">PERSONALIZED</a></span> SOLUTION FOR <span><a href="{{route('habar.project_list')}}">EACH PROJECT</a></span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="team">
        <div class="container">
            <div class="section-header text-center has_line">
                <h1 class="text-white">Our Team</h1>
            </div>
            <div class="team_inner">
                <!-- Swiper Team -->
                <div class="swiper swiper_team">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-block">
                                <img src="/img/team/1.jpg" alt="img">
                                <h5 class="text-white"><a href="#">Elias Walalign</a></h5>
                                <h6 class="text-uppercase text-olive">Founder</h6>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="team-block">
                                <img src="/img/team/3.jpg" alt="img">
                                <h5 class="text-white"><a href="#">Fahmi Girma</a></h5>
                                <h6 class="text-uppercase text-olive">Principle Architect</h6>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="team-block">
                                <img src="/img/team/4.jpg" alt="img">
                                <h5 class="text-white"><a href="#">Benoni Chappi</a></h5>
                                <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- Add Buttons -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial box_padding">
        <div class="has_line_lg"></div>
        <div class="testimonial_inner bg-black" data-aos="zoom-in" data-aos-duration="500">
            <!-- Swiper Testimonial -->
            <div class="swiper swiper_testimonial">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-block text-center">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                            <h6 class="text-olive">Company #1</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block text-center">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                            <h6 class="text-olive">Company #2</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block text-center">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                            <h6 class="text-olive">Company #3</h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

</main>
@endsection