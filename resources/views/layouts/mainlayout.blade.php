<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Habar Architects Official Website">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->

        <!-- Page Title -->
        <title>{{ $pageTitle ?? '' }}</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="/css/style.css">
        
    </head>


    <body class="bg-dark">

        <!-- preloader -->
        <div class="mry-preloader mry-active">
            <div class="mry-preloader-content">
                <img class="mry-logo mry-mb-20" src="/img/logo-loading-light.svg" alt="Habar">
                <p class="loader-logo">HABAR</p>
                <div class="mry-loader-bar">
                    <div class="mry-loader"></div>
                </div>
                <div class="mry-label">Please wait</div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- Preloader -->
        <!-- <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="H" class="characters">H</span>
					
					<span data-preloader-text="A" class="characters">A</span>
					
					<span data-preloader-text="B" class="characters">B</span>
					
					<span data-preloader-text="A" class="characters">A</span>
					
					<span data-preloader-text="R" class="characters">R</span>
				</div>
			</div>
		</div> -->

        

        <!-- Color Mode Switcher -->
		<div id="mode_switcher">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <!-- Header -->
		<header class="header">				
            <div class="container">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="{{ route('habar.home') }}" class="light_logo"><img src="/img/logo-light.svg" alt="logo"></a>
                        <a href="{{ route('habar.home') }}" class="dark_logo"><img src="/img/logo-dark.svg" alt="logo"></a>
                    </div>
                    
                    <div class="mainnav d-none d-lg-block">
                        <ul class="main_menu">
                            <li class="menu-item {{ $pageTitle === 'Habar Architects' ? 'active' : '' }}"><a href="{{ route('habar.home') }}">Home</a></li>

                            <li class="menu-item {{ $pageTitle === 'Habar Architects — Project List' ? 'active' : '' }}"><a href="{{ route('habar.project_list') }}">Projects</a></li>
                                    
                            <li class="menu-item {{ $pageTitle === 'About Habar Architects' ? 'active' : '' }}"><a href="{{ route('habar.about') }}">About Us</a></li>

                            <li class="menu-item {{ $pageTitle === 'Team Habar Architects' ? 'active' : '' }}"><a href="{{ route('habar.team') }}">Team</a></li>
                            
                            <li class="menu-item {{ $pageTitle === 'Contact Habar Architects' ? 'active' : '' }}"><a href="{{ route('habar.contact') }}">Contacts</a></li>

                            <li class="menu-item {{ $pageTitle === 'Habar Architects — News' ? 'active' : '' }}"><a href="{{ route('habar.news_list') }}">News</a></li>

                            @auth
                                <li class="menu-item"><a href="{{ route('dashboard') }}" target="_blank">Dashboard</a></li>
                            @else
                                <li class="menu-item"><a href="{{ route('login') }}" target="_blank">Login</a></li>
                            @endauth
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                    <button type="button" class="mr_menu_toggle d-lg-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
			</div>
		</header>

        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
            <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
			<div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

            <!-- Footer-->
            <footer class="footer p-0">
                <div class="footer_inner pb-0">
                    <div class="footer_elements d-flex align-items-center justify-content-center">
                        <div class="footer_elements_inner">
                            <div class="footer_social">
                                <ul class="social_list justify-content-center">
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="youbetube"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="terms_condition">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>Habar Architects 2024. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>

        @yield('page-content')

        <?php if($pageTitle !== 'Habar Architects') : ?>
            <!-- Footer-->
            <footer class="footer bg-dark-200 box_padding">
                <div class="footer_inner bg-gray" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-lg-4 col-md-2 col-sm-2">
                                <div class="section-header" data-aos="fade-right" data-aos-duration="1000">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <div class="communication">
                                    <div class="info_body" data-aos="fade-up" data-aos-duration="500">
                                        <h6>Official Website</h6>
                                        <h5>www.habararchitects.com</h5>
                                    </div>
                                    <div class="info_body" data-aos="fade-up" data-aos-duration="700">
                                        <h6>Email Address</h6>
                                        <h5>contact@habararchitects.com</h5>
                                    </div>
                                    <div class="info_body" data-aos="fade-up" data-aos-duration="900">
                                        <h6>Phone No</h6>
                                        <h5>+251 (91) 156 64**</h5>
                                    </div>
                                    <div class="info_body" data-aos="fade-up" data-aos-duration="1100">
                                        <h6>Office Address</h6>
                                        <h5>Gulf Aziz Bldg., Bole, Addis Ababa</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <div class="footer_elements d-flex align-items-center justify-content-end">
                                    <div class="footer_elements_inner">
                                        <div class="footer_logo" data-aos="fade-up" data-aos-duration="500">
                                            <a href="{{ route('habar.home') }}" class="light_logo"><img src="/img/logo-light.svg" alt="logo"></a>
                                        </div>
                                        <div class="footer_social">
                                            <ul class="social_list">
                                                <li class="facebook" data-aos="fade-up" data-aos-duration="500"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li class="twitter" data-aos="fade-up" data-aos-duration="700"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                <li class="instagram" data-aos="fade-up" data-aos-duration="900"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                                <li class="youbetube" data-aos="fade-up" data-aos-duration="1100"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="terms_condition">
                                            <ul>
                                                <li data-aos="fade-up" data-aos-duration="1300"><a href="#">Terms</a></li>
                                                <li data-aos="fade-up" data-aos-duration="1500"><a href="#">Condition</a></li>
                                                <li data-aos="fade-up" data-aos-duration="1700"><a href="#">Policy</a></li>
                                            </ul>
                                        </div>
                                        <div class="copyright" data-aos="fade-up" data-aos-duration="2000">
                                            <p>Habararchitects &copy; 2024. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Section Grid Lines -->
                    <ul class="grid_lines d-none d-md-flex justify-content-between">
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                    </ul>
                </div>
            </footer>

            <div class="totop">
                <a href="#">UP</a>
            </div>

            <!-- Section Grid Lines -->
            <ul class="grid_lines d-none d-md-flex justify-content-between">
                <li class="grid_line"></li>
                <li class="grid_line"></li>
                <li class="grid_line"></li>
                <li class="grid_line"></li>
                <li class="grid_line"></li>
                <li class="grid_line"></li>
                <li class="grid_line"></li>
            </ul>
        <?php endif; ?>
        
        <!-- Core JS -->
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>

        <!-- Swiper for Slider Type -->
        <script src="/js/swiper/swiper-bundle.min.js"></script>
        
        <!-- Funfacts -->
        <!-- <script src="/js/funfacts.js"></script> -->
        
        <!-- Portfolio -->
        <script src="/js/isotope/isotope.pkgd.min.js"></script>
        <script src="/js/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/js/isotope/packery-mode.pkgd.js"></script>
        <script src="/js/isotope/tilt.jquery.js"></script>
        <script src="/js/isotope/isotope-init.js"></script>
        
        <!-- Cursor Effect -->
        <script src="/js/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="/js/select2/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="/js/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="/js/theme.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var repeatBlock = document.getElementById("grid-item");
                for (var i = 0; i < 5; i++) {
                    repeatBlock.innerHTML += repeatBlock.innerHTML;
                }
            });
        </script>
    </body>
</html> 