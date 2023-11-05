@extends('layouts.front-master')
@section('main-content')

<section class="abtHero about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <span class="subTitle">About Us</span>
                <h2 class="innerMainTitle">Our role and how we work</h2>
            </div>
        </div>
    </div>
</section>

<section class="abtContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Shaping the future of the NMC</h3>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>What we do</h3>
                    <p>We are the independent regulator for nurses and midwives in the UK, and nursing associates in England.</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Governance</h3>
                    <p>The role of our Council and our senior management</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Reports and accounts</h3>
                    <p>Read our annual reports and accounts and the latest insight from our register</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Careers</h3>
                    <p>Welcome to our careers pages where you can find out more about what we do and how to apply for jobs with us.</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Consultations</h3>
                    <p>Our current and past consultations</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Policy</h3>
                    <p>Our Position statements, big projects and responses to consultations.</p>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Equality, diversity and inclusion</h3>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="aboutCard">
                    <h3>Who we work with</h3>
                    <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="iWant">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 m-auto">
                <h4 class="iWantTitle">I want to...</h4>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                        <div class="iWantCard">
                            <h4>Find out about the <b>NMC</b></h4>
                            <p>Our values and behaviours will shape our culture, influencing the work we do and how we
                                do it</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                        <div class="iWantCard">
                            <h4>Read <b>NMC</b> reports and accounts</h4>
                            <p>Read our annual reports and accounts and the latest insight from our register</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                        <div class="iWantCard">
                            <h4>Apply for a job with the <b>NMC</b></h4>
                            <p>Welcome to our careers pages where you can find out more about what we do and how to
                                apply for jobs with us.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ourWork">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="ourWorkTitle">Our work in Fitness to practise</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="ourWorkCard shadow">
                    <img src="{{ asset("front_assets/images/ourwork/pss-pic.jpg") }}" alt="We support the public" title="We support the public">
                    <h3>We support the public</h3>
                    <a href="javascript:void(0)">Read More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="ourWorkCard shadow">
                    <img src="{{ asset("front_assets/images/ourwork/call-to-action-block_0005_dsc_3908.jpg") }}" alt="We hold hearings" title="We hold hearings">
                    <h3>We hold hearings</h3>
                    <a href="javascript:void(0)">Read More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="ourWorkCard shadow">
                    <img src="{{ asset("front_assets/images/ourwork/call-to-action-block_0006_dsc_3887.jpg") }}" alt="We impose sanctions" title="We impose sanctions">
                    <h3>We impose sanctions</h3>
                    <a href="javascript:void(0)">Read More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="ourWorkCard shadow">
                    <img src="{{ asset("front_assets/images/ourwork/call-to-action-block_0008_concerns_master.jpg") }}" alt="We offer advice on raising concerns" title="We offer advice on raising concerns">
                    <h3>We offer advice on raising concerns</h3>
                    <a href="javascript:void(0)">Read More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
</section>

@endsection
