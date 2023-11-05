@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="codeMainBanner ">
        <div class="container-fluid p-0">

            <img class="w-100" src="{{ asset('front_assets/images/innerpage/the-code-banner-1.jpg') }}" alt="the-code-banner-1">
        </div>
    </section>

    <section class="abtContent pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="mainContent">
                        <h2>The Code</h2>
                        <h4>
                            Professional standards of practice and behaviour for nurses, midwives and nursing associates
                        </h4>
                        <div class="updatesButtons mb-5">
                            <div class="btn-group m-auto text-center d-flex" role="group" aria-label="Basic checkbox toggle button group">
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-print"></i> Download PDF
                                </button>
                                <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                    <i class="fas fa-bars"></i> View online
                                </button>
                            </div>
                        </div>
                        <div class="card text-dark bg-warning mb-3 shadow">
                            <div class="card-body">
                                <p>
                                    We know that this is an extremely challenging time for the professionals on our register.
                                </p>
                                <p>
                                    Our Code and Standards continue to support you by providing key principles you should follow, alongside the ethical frameworks that normally guide your practice.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="w-100" src="{{ asset('front_assets/images/innerpage/code-cover.jpg') }}" alt="code-cover">
                            </div>
                            <div class="col-lg-8">
                                <p class="text-muted">
                                    The Code presents the professional standards that nurses, midwives and nursing associates must uphold in order to be registered to practise in the UK.
                                </p>
                                <p class="text-muted">
                                    It is structured around four themes – prioritise people, practise effectively, preserve safety and promote professionalism and trust.
                                </p>
                                <p class="text-muted">
                                    Each section contains a series of statements that taken together signify what good nursing and midwifery practice looks like.
                                </p>
                                <div class="updatesButtons mb-3">
                                    <button type="button" class="btn btn-outline-secondary px-5 text-start shadow">
                                        <i class="fas fa-print"></i> <b>The Code</b> <small>PDF 199.3 KB</small>
                                    </button>
                                </div>
                                <div class="updatesButtons mb-3">
                                    <button type="button" class="btn btn-outline-secondary px-5 text-start shadow">
                                        <i class="fas fa-print"></i> <b>Y Code</b> <small>PDF 186.3 KB</small>
                                    </button>
                                </div>
                                <div class="updatesButtons mb-3">
                                    <button type="button" class="btn btn-secondary px-4 text-start shadow">
                                        Read the Code online
                                    </button>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-4">
                            <b>Guidance and supporting information</b>
                        </h2>
                        <p>
                            Our guidance covers some important things to consider - like using social media responsibly and what to do if you ever need to raise a concern.
                        </p>
                        <p>
                            We've also published some additional information on topics that may come up throughout your career:
                        </p>
                        <div class="updatesButtons mb-3">
                            <button type="button" class="btn btn-outline-secondary px-4 text-start shadow">
                                <i class="fas fa-print"></i> Additional information on delegation and accountability <small>PDF 11.1 MB</small>
                            </button>
                        </div>
                        <div class="updatesButtons mb-3">
                            <button type="button" class="btn btn-outline-secondary px-4 text-start shadow">
                                <i class="fas fa-print"></i> Gwybodaeth ychwanegol am dirprwyo ac atebolrwydd <small>PDF 3.4 MB</small>
                            </button>
                        </div>
                        <div class="updatesButtons mb-3">
                            <button type="button" class="btn btn-secondary px-4 text-start shadow">
                                Additional information on conscientious objection
                            </button>
                        </div>
                        <div class="updatesButtons mb-3">
                            <button type="button" class="btn btn-secondary px-4 text-start shadow">
                                Additional information on female genital mutilation (FGM)
                            </button>
                        </div>
                        <h2 class="mt-4">
                            <b>Caring with Confidence: The Code in Action</b>
                        </h2>
                        <p>
                            Our core role is to regulate, and to ensure we regulate as well as possible, we proactively support our professions.
                        </p>
                        <p>
                            This means creating resources that are useful throughout your career as a nurse, midwife or nursing associate, helping you to deliver our standards and address future challenges.
                        </p>
                        <p>
                            Caring with Confidence is a series of bite-sized animations about key aspects of your role as a nursing or midwifery professional, and how the Code can support you. Please share the series with your colleagues.
                        </p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card confidence shadow border-0 text-center">
                                    <img src="{{ asset('front_assets/images/innerpage/accountability-grid.jpg') }}" class="card-img-top w-100" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">
                                            <b>Accountability</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card confidence shadow border-0 text-center">

                                    <img src="{{ asset('front_assets/images/innerpage/professional-judgement-grid.jpg') }}" class="card-img-top w-100" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">
                                            <b>Professional judgement</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card confidence shadow border-0 text-center">
                                    <img src="{{ asset('front_assets/images/innerpage/delegation-grid.jpg') }}" class="card-img-top w-100" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">
                                            <b>Delegation</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="mainSidebar">
                        <h3>You are here:</h3>
                        <ul class="innerPageSide">
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Standards</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>The Code</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Read The Code online</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Caring with Confidence: The Code in Action</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Revalidation</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Standards for nurses</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Standards for midwives</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Standards for nursing associates</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Standards for post registration</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fas fa-angle-right"></i>Guidance and Supporting Information</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.front-components.iwant')
    <section class="moreAbout">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h3>Find out more about the <b>NMC</b></h3>
                    <p>Click on one of the links below, to find out more about what we do.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">
                        <img src="{{ asset('front_assets/images/innerpage/stamp.png') }}" alt="Who we regulate" title="Who we regulate">
                        <h4>Who we regulate</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">

                        <img src="{{ asset('front_assets/images/innerpage/meeting.png') }}" alt="About our Council" title="About our Council">
                        <h4>About our Council</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">

                        <img src="{{ asset('front_assets/images/innerpage/analysis.png') }}" alt="Our strategy for 2020-2025" title="Our strategy for 2020-2025">
                        <h4>Our strategy for 2020-2025</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">

                        <img src="{{ asset('front_assets/images/innerpage/team.png') }}" alt="Our annual corporate plan" title="Our annual corporate plan">
                        <h4>Our annual corporate plan</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">

                        <img src="{{ asset('front_assets/images/innerpage/audience.png') }}" alt="Our key audiences" title="Our key audiences">
                        <h4>Our key audiences</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                    <div class="moreAboutCard">
                        <img src="{{ asset('front_assets/images/innerpage/feedback.png') }}" alt="Our values and behaviours" title="Our values and behaviours">
                        <h4>Our values and behaviours</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.front-components.ourwork')


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
