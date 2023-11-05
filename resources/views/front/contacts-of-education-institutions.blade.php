@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="abtHero blueDefaultBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Contacts At Education Institutions</h2>
                    <p class="innerMainDesc">
                        Find out more about official correspondents and lead midwives for education
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
                        <!--@foreach ($cardSlides as $cardSlide)-->
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Official correspondents and lead midwives for education</b></h5>
                                    </div>
                                    <p class="mb-0 text-muted">
                                        More on the roles of these contacts at AEIs
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--@endforeach-->
                        <!------------------------->
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>The University of The Bahamas</b></h5>
                                    </div>
                                    <a href="https://www.ub.edu.bs/academics/faculty/nursing-allied-health/" target="_blank">
                                    <p class="mb-0 text-muted">
                                        Welcome to the University of The Bahamas Nursing and Allied Health Professions Unit, the premier institution for nursing and allied health training in The Bahamas.
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Southern College</b></h5>
                                    </div>
                                    <a href="https://southerncollege.net/nursing-degrees" target="_blank">
                                    <p class="mb-0 text-muted">
                                        Our nursing degrees reflect the latest in local and international academic standards for nursing. 
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Terreve College </b></h5>
                                    </div>
                                    <a href="https://terrevecolleges.org/programs.html" target="_blank">
                                    <p class="mb-0 text-muted">
                                        Terreve Advance Placement Program (TAPP)
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center h-100 pt-3 pb-3 shadow">
                                <div class="card-body">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0"><b>Allied Health Professions </b></h5>
                                    </div>
                                    <a href="https://www.asahp.org/what-is" target="_blank">
                                    <p class="mb-0 text-muted">
                                        Allied Health professionals are involved with the delivery of health or related services pertaining to the identification.
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!------------------------->
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
                                    Last updated: 30/03/2022
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.front-components.iwant')

</main>

@endsection
