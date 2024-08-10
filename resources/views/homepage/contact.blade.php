@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Contact</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>        
</div>


<!-- Main Wrapper-->
<main class="wrapper">
    <section class="gmap box_padding">
        <div class="gmapbox" data-aos="zoom-in" data-aos-duration="1000">
            <div id="googleMap" class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.2968914633655!2d38.785110380382704!3d8.995112479148958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84fdf566b8a9%3A0x3cfc05836ed024a4!2zR3VsZiBBeml6IEJ1aWxkaW5nIHwgQm9sZSBNZWRoYW5pYWxlbSB8IOGMjuGIjeGNjSDhiqDhi7LhiLUg4YiF4YqV4Y2DIHwg4Ymm4YiMIOGImOGLteGIg-GKkuGKoOGIiOGInQ!5e0!3m2!1sam!2set!4v1719330556949!5m2!1sam!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section class="contact_us bg-dark-200">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="section-header">
                        <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                        <p class="$gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto autem repellendus laboriosam harum quo mollitia rem natus voluptas molestiae. Blanditiis eveniet repellat nam, recusandae unde deserunt esse voluptate mollitia accusamus!</p>
                        <p class="$gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto autem repellendus laboriosam harum quo mollitia rem natus voluptas molestiae. Blanditiis eveniet repellat nam, recusandae unde deserunt esse voluptate mollitia accusamus!</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home_contact">
                        <form action="contact.php" method="POST">
                            <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="phone" id="phone" type="number" placeholder="Your Phone No" aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                            <textarea class="form-control pt-4" name="message" id="message" placeholder="Your Message" rows="3"></textarea>
                            <div class="btn_group">
                                <button type="submit" class="btn olive">Send Mail</button>  
                            </div>
                        </form>
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
    </section>
</main>
@endsection