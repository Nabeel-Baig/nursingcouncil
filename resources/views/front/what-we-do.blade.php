@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="abtHero blueDefaultBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!--<span class="subTitle">Who we are and</span>-->
                    <h2 class="innerMainTitle">what we do</h2>
                    <!--<p class="innerMainDesc">-->
                    <!--    We are the independent regulator for nurses and midwives The Bahamas, and nursing-->
                    <!--    associates in England.-->
                    <!--</p>-->
                    <h4 class="text-white">
                        THE COUNCIL SEEKS TO ENSURE
                    </h4>
                </div>

                <!--<div class="col-lg-6 col-md-12 col-sm-12">-->
                <!--    <div class="videoBanner shadow">-->
                        <!--<img src="{{ asset('front_assets/images/about-us-video-thumb.jpg') }}" alt="">-->
                <!--        <img src="{{ asset('front_assets/images/about-us-video-thumb.jpg') }}" alt="">-->
                <!--        <img class="playBtn" src="{{  asset('front_assets/images/icons/play-btn.svg') }}" alt="Play" title="Play" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                <!--    </div>-->
                <!--    <h3 class="videoTitle">About the Nursing and Midwifery Council</h3>-->
                <!--</div>-->
            </div>
        </div>
    </section>

    <section class="abtContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="mainContent">
                    {{--
                        <p>
                            {!!
                                $content->page_content;
                            !!}
                        </p>
                    --}}
                        {{-- <p>
                            Our vision is safe, effective and kind nursing and midwifery that improves everyone’s health and
                            wellbeing.
                        </p>
                        <p>
                            As the independent regulator of more than 758,000 nursing and midwifery professionals, we have an
                            important role to play in making this a reality.
                        </p>
                        <p>
                            Our core role is to <strong>regulate</strong>. First, we promote high education and professional
                            standards for nurses and midwives across the UK, and nursing associates in England. Second, we
                            maintain the register of professionals eligible to practise. Third, we investigate concerns
                            about nurses, midwives and nursing associates – something that affects less than one percent of
                            professionals each year. We believe in giving professionals the chance to address concerns, but
                            we’ll always take action when needed.
                        </p>
                        <p>
                            To regulate well, we <strong>support</strong> our professions and the public. We create resources
                            and guidance that are useful throughout people’s careers, helping them to deliver our standards
                            in practice and address new challenges. We also support people involved in our investigations,
                            and we’re increasing our visibility so people feel engaged and empowered to shape our work.
                        </p>
                        <p>
                            Regulating and supporting our professions allows us to <strong>influence</strong> health and
                            social care. We share intelligence from our regulatory activities and work with our partners to
                            support workforce planning and sector-wide decision making. We use our voice to speak up for a
                            healthy and inclusive working environment for our professions.
                        </p> --}}
                        <p>
                            <b>MOTTO:</b> Guide and promote excellence in the practice of Nursing in The Commonwealth of Bahamas.
                        </p>
                        <p>
                            <b>MANDATE:</b> Develop and execute regulations and By laws to govern the education and practice of Nurses and Midwives in accordance with the Nurses and Midwives Act, and Subsidiary Regulations.
                        </p>
                        
                         <div class="container my-5">
                            <div class="row text-center mb-5">
                              <h2>CORE VALUES</h2>
                            </div>
                            <div class="row">
                              <div class="mainContent">
                                <div class="row">
                                    @foreach ($cards as $card)
                                    <div class="col-lg-6 mb-3">
                                        <div class="card text-center h-100 pt-3 pb-3 shadow">
                                          <div class="card-body">
                                            <div class="card-title mb-0">
                                              <h5 class="mb-0"><b>{{ $card->card_title ?? '' }}</b></h5>
                                            </div>
                                            <p class="mb-0 text-muted">
                                                {{ $card->card_details ?? '' }}
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                </div>
                              </div>
                            </div>
                        </div>
                        
                        <h3 class="mt-2">POWER OF THE COUNCIL IN ACCORDANCE WITH THE NURSES AND MIDWIVES ACT 1971</h3>
                        <h5>
                            The Council seeks to ensure the protection of the public by supporting the development and utilization of well trained nurses.
                        </h5>
                        <h5>
                            Additional Functions of the Council:
                        </h5>
                        <ul class="m-0 ">
                            <li>Prescribe entry requirements for nurse training programs.</li>
                            <li>Regulate the role function of its members</li>
                            <li>Establish, maintain and develop standards of knowledge, skills, and professional ethics among its members’</li>
                            <li>Set practice examinations for enrolment and registration</li>
                            <li>Set operational fees for examination, registration and licensure</li>
                            <li>Investigates cmplaints regarding nurses and nursing practice</li>
                            <li>Validates enrolmnt and registration of nurses</li>
                            <li>Control the education, training and practice of nurses and midwives</li>
                            <li>Set operational fees for examination, registration, and licensure</li>
                            <li>Discipline of Nurses and Midwives</li>
                            <li>Remove nurses name from the roll and register</li>
                            <li>Reinstate nurses names to the roll and register </li>
                            <li>The Council regulates nurses agencies under the nurses and midwives Act 1971 (Nurses Agency) Regulations 1993</li>
                            <h4 class="my-3">
                                FINANCIAL
                            </h4>
                            </ul>
                             <ul class="m-0 ">
                            <li>The council receives a subvention from the government through the ministry of health and wellness</li>
                            <li>The council funds consists of monies lawfully paid for services provided</li>
                            <li>The annual report of the nursing council is submitted march of each year for the previous calender year. </li>
                            <li>The council is audited by an independent auditor annually </li>
                            <!--<li>-->
                            <!--    Regulate the role function of its members-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--     Approve training programmes, facilities, and faculty-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    Set qualifying examinations for Enrolment and Registration Set standards for nursing practice-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--   Establish regulations to govern the practice of nursing Establish byelaws to control the administrative and domestic affair of the Council consistent with the Act and subsidiary Regulations-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--   Control the education, training and practice of Nurses and Midwives-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    Prescribe entry requirements for training programmes in nursing-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    Set operational fees for examination, registration, and licensure-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    Discipline of Nurses and Midwives-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    Removal of nurses' name from the roll and the Register-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
            @include('layouts.front-components.sidemenubar')

            </div>
        </div>
    </section>

<!--    <section class="abtContent pt-0">-->
<!--  <div class="container">-->
<!--    <div class="row text-center mb-5">-->
<!--      <h2>CORE VALUES</h2>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--      <div class="mainContent">-->
<!--        <div class="row">-->
<!--            @foreach ($cards as $card)-->
<!--            <div class="col-lg-6 mb-3 m-auto">-->
<!--                <div class="card text-center h-100 pt-3 pb-3 shadow">-->
<!--                  <div class="card-body">-->
<!--                    <div class="card-title mb-0">-->
<!--                      <h5 class="mb-0"><b>{{ $card->card_title ?? '' }}</b></h5>-->
<!--                    </div>-->
<!--                    <p class="mb-0 text-muted">-->
<!--                        {{ $card->card_details ?? '' }}-->
<!--                    </p>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            @endforeach-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->


    @include('layouts.front-components.iwant')

    {{-- <section class="moreAbout">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h3>Find out more about the <b>NCB</b></h3>
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
    </section> --}}

    {{-- @include('layouts.front-components.ourwork') --}}


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
