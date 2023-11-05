@extends('layouts.front-master')
@section('main-content')


<main>
    <section class="abtHero blueDefaultBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Careers</h2>
                    <p class="innerMainDesc">
                        Welcome to our careers pages where you can find out more about what we do and how to apply for jobs with us.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="abtContent">
        <div class="container">
            <div class="row">
                <div class="mainContent">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/ncb-logo-01.svg') }}" alt="Who we regulate" title="Who we regulate">
                                <h4>We are Collaborative</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/innerpage/meeting.png') }}" alt="Who we are" title="Who we are">
                                <h4>Who we are</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/innerpage/analysis.png') }}" alt="Benefits" title="Benefits">
                                <h4>Benefits</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/innerpage/team.png') }}" alt="What our staff say" title="What our staff say">
                                <h4>What our staff say</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/innerpage/audience.png') }}" alt="How to apply" title="How to apply">
                                <h4>How to apply</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="moreAboutCard">
                                <img src="{{ asset('front_assets/images/innerpage/feedback.png') }}" alt="Current vacancies" title="Current vacancies">
                                <h4>Current vacancies</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 m-auto mt-5">
                        <a class="generalLink" href="javascript:void(0);">How we use your data when you're applying to work for us</a>
                        <div class="updatesButtons">
                            <div class="btn-group m-auto text-center d-flex" role="group" aria-label="Basic checkbox toggle button group">
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-print"></i> Print this page
                                </button>
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-envelope"></i> Email this page
                                </button>
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    Last updated: 09/01/2018
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.front-components.iwant')

    {{-- <section class="ourWork">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="ourWorkTitle">Our work in Fitness to practise</h4>
                </div>
            </div>
            <div class="slide01">
                @foreach ($slides as $slide)
                <div>
                    <div class="ourWorkCard shadow slide01Card">

                        <img src="{{ asset($slide->slide_image) }}" alt="slide01">
                        <h3>{{ $slide->slide_title }}</h3>
                        <p>
                            {{ $slide->slide_sub_title }}
                        </p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                @endforeach
                {{-- <div>
                    <div class="ourWorkCard shadow slide01Card">
                        <img src="{{ asset('front_assets/images/slider01/slide01.jpg') }}" alt="slide01">
                        <h3>Coronavirus (Covid-19)</h3>
                        <p>
                            Find out more about temporary registration and changes to how we’re operating during this time.
                        </p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div>
                    <div class="ourWorkCard shadow slide01Card">
                        <img src="{{ asset('front_assets/images/slider01/slide02.png') }}" alt="slide02">
                        <h3>Caring with Confidence</h3>
                        <p>
                            Caring with Confidence is a series of bite-sized animations about key aspects of your role, and how the Code can support you
                        </p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div>
                    <div class="ourWorkCard shadow slide01Card">
                        <img src="{{ asset('front_assets/images/slider01/slide03.jpg') }}" alt="slide03">
                        <h3>Revalidation</h3>
                        <p>
                            Everything you need to know about revalidation
                        </p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div>
                    <div class="ourWorkCard shadow slide01Card">
                        <img src="{{ asset('front_assets/images/slider01/slide04.jpg') }}" alt="slide04">
                        <h3>Ensuring fitness to practise</h3>
                        <p>
                            How we act to protect the public
                        </p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div> 
            </div>
    </section> --}}

    <div class="modal fade aboutVideo" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/gXaZ2U_BuoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

