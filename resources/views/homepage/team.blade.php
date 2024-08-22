@extends('layouts/mainlayout')

@section('page-content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Our Team</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="{{ route('habar.home') }}">Home</a></li>
                    <li class="active">Team</li>
                </ul>
            </div>
        </div>
    </div>        
</div>

<main class="wrapper">
    <!-- Our Team -->
    <section class="team in-team">
        <div class="container-sm">
            <div class="section-header medium">
                <h2 class="text-white">Meet Our Team</h2>
                <div class="section-desc row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <p>Habar Architects Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, culpa! Omnis, ipsum ipsam illum iste ratione aliquid repellendus porro. </p>
                    </div>
                    <div class="col-lg-7">
                        <p>Habar Architects Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, culpa! Omnis, ipsum ipsam illum iste ratione aliquid repellendus porro</p>
                    </div>
                </div>
            </div>

            <div class="team_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="team-block">
                            <img src="/img/team/1.jpg" alt="img">
                            <h5 class="text-white"><a href="#">Elias Walalign</a></h5>
                            <h6 class="text-uppercase text-olive">Founder</h6>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="team-block">
                            <img src="/img/team/4.jpg" alt="img">
                            <h5 class="text-white"><a href="#">Fahmi Girma. Grace</a></h5>
                            <h6 class="text-uppercase text-olive">Principle Architect</h6>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="team-block">
                            <img src="/img/team/5.jpg" alt="img">
                            <h5 class="text-white"><a href="#">Benoni Chappi</a></h5>
                            <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection