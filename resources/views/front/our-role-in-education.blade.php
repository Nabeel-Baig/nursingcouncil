@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="abtHero roleEducationMainBanner blueOverlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Our Role in Education</h2>
                    <p class="innerMainDesc">
                        We set standards of education, training, conduct and performance for nurses and midwives in the UK and nursing associates in England
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
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            {!!
                            $content->page_content;
                            !!}
                            {{-- <h3>Our role in education</h3>
                            <p>
                                We want to make sure that nurses, midwives and nursing associates are consistently educated to a high standard, so that they are able to deliver safe and effective care at the point of entry to the register and throughout their careers. We also want to make sure that patients, service users and the public have a clear understanding of what nurses, midwives and nursing associates know and are competent to do.
                            </p>
                            <p>
                                We are committed to delivering a <a class="defaultLink" href="javascript:void(0)">programme of change for education</a> between 2016 and 2020, to modernise education standards and ensure that nurses, midwives and nursing associates are equipped with the skills and knowledge they need to practise now and in the future.
                            </p>
                            <h3>What we do</h3>
                            <ul>
                                <li>We set education standards, which shape the content and design of programmes and state the competences of a nurse, midwife or nursing associate.</li>
                                <li>We approve education institutions and programmes and maintain a database of approved programmes (courses).</li>
                                <li>We deliver <a class="defaultLink" href="javascript:void(0)">quality assurance</a> of our approved programmes.</li>
                                <li>We register nurses, midwives and nursing associates when they have successfully completed their courses.</li>
                                <li>We assess and ensure the quality of practice placements for students.</li>
                            </ul>
                            <h3>What we don't do</h3>
                            <ul>
                                <li>We don't educate or select students. This is done by the approved education institutions (AEIs) and practice partners in line with our standards.</li>
                                <li>We don't set curricula. This is done by the AEIs and practice partners in line with our standards.</li>
                                <li>We don't regulate students. If there are concerns about a student, this is dealt with by the AEI.</li>
                                <li>We don't assess the ability of practice settings to support students' learning. This is done by AEIs.</li>
                                <li>We don't assess the quality of care in hospitals or the community. This is the responsibility of other regulators: the Care Quality Commission in England, Healthcare Improvement Scotland, Healthcare Inspectorate Wales and Northern Ireland's Regulation and Quality Improvement Authority.</li>
                            </ul> --}}
                        </div>
                        @include('layouts.front-components.sidemenubar')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recentPages">
        <div class="container">
            <div class="row align-items-center">
                <h3 class="dualHeading mb-4 text-center">Helpful <span>Resources</span></h3>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-file-pdf fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Student leaflet - Training to be a nurse,midwife or nursing associate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-file-pdf fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Cymraeg</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-file-pdf fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">IFF Report - Evaluation of the NMC pre-registration standards: Final report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-file-pdf fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Educating nurses, midwives and nursing associates: How you can get involved</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="updatePageCard shadow border rounded p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <i class="far fa-file-pdf fa-2x"></i>
                                    </div>
                                    <div class="col-11">
                                        <a href="javascript:void(0);">Cymraeg</a>
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
                                        <a href="javascript:void(0);">Our legislative requirement for regulating education standards</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                Last updated: 30/03/2022
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.front-components.iwant')
</main>

@endsection
