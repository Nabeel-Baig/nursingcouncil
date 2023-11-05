@extends('layouts.front-master')
@section('main-content')
<main>
    <section class="abtHero policyMainBanner blueOverlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Policy</h2>
                    <p class="innerMainDesc">
                        Our Position statements, big projects and responses to consultations.
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
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Projects we're involved in</b></h5>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <b>The latest on projects we are part of</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Position statements</b></h5>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        The healthcare environment we work in can change very quickly. Read our point of view on a number of recent issues in the position statements below.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Our responses to consultations</b></h5>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        <b>We respond to consultations from other organisations</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 m-auto mt-5">
                        <div class="updatesButtons">
                            <div class="btn-group m-auto text-center d-flex" role="group" aria-label="Basic checkbox toggle button group">
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-print"></i> Print this page
                                </button>
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-envelope"></i> Email this page
                                </button>
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    Last updated: 02/10/2020
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.front-components.iwant')
    <section class="ourWork">
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
                </div> --}}
            </div>
    </section>

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
