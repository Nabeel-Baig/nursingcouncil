@extends('layouts.front-master')
@section('main-content')


<main>
    <section class="abtHero standardsMainBanner blueOverlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Standards for nurses</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="abtContent pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainContent">
                        <div class="card text-dark bg-warning mb-3 shadow">
                            <div class="card-body">
                                {!!
                                $content->page_content;
                                !!}
                                {{-- <p>
                                    In response to the ongoing Covid-19 situation, we’ve produced
                                    <a href="javascript:void(0);">recovery and emergency education programme standards</a>
                                    to enable our approved education institutions (AEIs) and their practice learning partners to support all of their nursing and midwifery students in an appropriate way.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                @foreach ($slides as $slide)
                <div class="col-lg-4 mb-4 m-auto">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset($slide->slide_image) }}" alt="Standards of proficiency for registered nurses" title="Standards of proficiency for registered nurses">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>{{ $slide->slide_title }}</b></h5>
                                    <p class="p-0 mt-2">
                                        {{ $slide->slide_sub_title }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{  asset('front_assets/images/standard-nursing/future-nurse.jpg') }}" alt="Standards of proficiency for registered nurses" title="Standards of proficiency for registered nurses">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Standards of proficiency for registered nurses</b></h5>
                                    <p class="p-0 mt-2">
                                        Our new standards of proficiency represent the skills, knowledge and attributes all nurses must demonstrate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset('front_assets/images/standard-nursing/standards-framework.jpg') }}" alt="Standards framework for nursing and midwifery education" title="Standards framework for nursing and midwifery education">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Standards framework for nursing and midwifery education</b></h5>
                                    <p class="p-0 mt-2">
                                        Part 1 of Realising professionalism: Standards for education and training
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset('front_assets/images/standard-nursing/supervision-and-assessment.jpg') }}" alt="Standards for student supervision and assessment" title="Standards for student supervision and assessment">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Standards for student supervision and assessment</b></h5>
                                    <p class="p-0 mt-2">
                                        Part 2 of Realising professionalism: Standards for education and training
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset('front_assets/images/standard-nursing/pre-reg-nursing.jpg') }}" alt="Standards for pre-registration nursing programmes" title="Standards for pre-registration nursing programmes">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Standards for pre-registration nursing programmes</b></h5>
                                    <p class="p-0 mt-2">
                                        Part 3 of Realising professionalism: Standards for education and training
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset('front_assets/images/standard-nursing/rtp-standards.jpg') }}}" alt="Standards relating to return to practice" title="Standards relating to return to practice">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Standards relating to return to practice</b></h5>
                                    <p class="p-0 mt-2">
                                        We've published new return to practice standards
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="postImageCard">
                        <div class="ourWorkCard h-100 pb-3 shadow">
                            <img src="{{ asset('front_assets/images/standard-nursing/pulse-crop.jpg') }}" alt="Pre-2018 Standards" title="Pre-2018 Standards">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Pre-2018 Standards</b></h5>
                                    <p class="p-0 mt-2">
                                        Pre-2018 standards still being used by programmes across the UK
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
            <div class="row">
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
                                Last updated: 17/11/2020
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@include('layouts.front-components.iwant')

@endsection
