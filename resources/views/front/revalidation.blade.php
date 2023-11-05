@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="abtHero revalidationMainBanner blueOverlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Revalidation</h2>
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
                                {{-- <h4>Our revalidation materials have moved</h4>
                                <p>
                                    We've moved our guidance, documents and templates for revalidation to this dedicated area of our website.
                                    The guidance has not changed and the process is the same, so you can continue to revalidate as normal.
                                </p>
                                <h4>How to revalidate during Covid-19</h4>
                                <p>
                                    We've put some measures in place to support you to meet your revalidation requirements during the Covid-19 pandemic.
                                    <a href="javascript:void(0);">Visit our Covid-19: Revalidation page</a> for information including details of revalidation deadline extensions.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 pt-3 pb-3 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Welcome to revalidation</b><br>Get an overview of the process</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 py-5 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>What you need to do</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 py-5 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Your online application</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 py-5 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Information for confirmers and employers</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 py-5 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Resources and templates</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="javascript:void(0);" class="cardLinkTo">
                        <div class="card text-center h-100 py-5 shadow">
                            <div class="card-body">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0"><b>Revalidation stories</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recentPages">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="dualHeading mb-4">Recently <span>Updated Pages</span></h3>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-edit fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Revalidating as a nursing associate</a>
                                        <br>
                                        <span>Updated on 27/10/2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-edit fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Films</a>
                                        <br>
                                        <span>Updated on 27/10/2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-edit fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Susie's revalidation story so far...</a>
                                        <br>
                                        <span>Updated on 08/09/2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-edit fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Continuing professional development</a>
                                        <br>
                                        <span>Updated on 08/09/2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-edit fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Caroline's revalidation story</a>
                                        <br>
                                        <span>Updated on 26/08/2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="dualHeading mb-4">Recently <span>Updated Pages</span></h3>
                    <p>
                        Find out everything you need to know about revalidation including how you can meet the requirements by reading 'How to revalidate with the NMC'.
                        <br>
                        <a href="javascript:void(0);">Download guidance and information</a>
                    </p>

                    <h3 class="dualHeading mb-4 mt-4">Recently <span>Updated Pages</span></h3>
                    <p>
                        Your online application opens 60 days before your revalidation application date.
                    </p>
                    <p>
                        Once you have met the revalidation requirements and had your confirmation discussion, you can
                        <a href="https://online.nmc-uk.org/Account/Login?ReturnUrl=/">begin your application in NMC Online</a>
                        .
                    </p>

                    <a href="javascript:void(0)" class="btn mainThemeBtn shadow">Log into NMC Online</a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
