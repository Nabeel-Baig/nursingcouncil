@extends('layouts.front-master')
@section('main-content')


<main>
    <section class="heroSection abtHero position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 d-flex align-items-center" data-aos="fade-right">
                    <div class="mainData">
                        <h1>We are the</h1>
                        <h2> NURSING COUNCIL, </h2>
                        <h2> COMMONWEALTH OF</h2>
                        <p>The Bahamas</p>
                        <!--<a href="javascript:void(0)" class="btn mainThemeBtn shadow">Find Out More</a>-->
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 d-flex position-relative " data-aos="fade-left">
                    <div class="formSide">
                        <h2>Confirm</h2>
                        <p>A nurse, midwife or nursing associate’s
                            registration</p>
                        <form method="POST" action="{{ route('user-register') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email"  placeholder="Email" required>
                            </div>
                            <!--<div class="mb-3">-->
                            <!--    <textarea class="form-control" cols="30" rows="3" placeholder="What Services Searching"></textarea>-->
                            <!--</div>-->
                            <button type="submit" class="btn btn-primary shadow">Search Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="intoSection">
        <div class="container-fluid">
            <div class="row align-items-center"style="margin-top: 90px;">
                <!--<div class="col-lg-6 col-md-6 col-sm-12 introBanner" data-aos="fade-up-right" >-->
                <!--    {{-- <img src="{{ asset("front_assets/images/into-banner.png") }}" alt="Our introduction" title="Our introduction"> --}}-->
                    <!--<img src="{{ asset('assets/uploads/page-info/v5ojxujB1WPPwqPMCXJAVOYqKCaW0ofSBYoX0p71.png') }}" alt="Our introduction" title="Our introduction">-->
                <!--    <img src="{{ asset($homeIntro->image) }}" alt="Our introduction" title="Our introduction">-->
                <!--</div>-->
                <!--<div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up-left>-->
                <div class="col-lg-8 m-auto"  data-aos="fade-up-left>
                    <div class="intoData">
                        <h4>Our introduction</h4>
                        <h3>About Us- What We Do</h3>
                        <!--<h3>{{ $homeIntro->title ?? '' }}</h3>-->
                        <div class="qoute">
                            <!--<p>{!! $homeIntro->sub_title ?? '' !!}</p>-->
                            <p>The Nursing Council is a body established to provide control of the training and practice of clinical nurses and midwives, for the registration of nurses, clinical nurses and midwives. The Council functions according to the Nurses and Midwives Act and the Nurses and Midwives (Nurses Agencies) Regulations, 1993. The Council consists of 10 appointed members:</p>
                                    <ul>
                                    <li>5 persons whom the Minister selects.</li>
                                    <li>3 persons nominated by the Nurses’ Association</li>
                                    <li>1 person nominated by the Minister of Education.</li>
                                    <li>1 registered medical practitioner selected by the minister in association with the medical association.</li>
                                    </ul>
                                    <p>
                            Appointments are for two years, after which each member is eligible for reappointment. The Minister is responsible for appointing a Chairman from among the members. Additionally, there is a Nursing Appeal Tribunal, which investigates grievances, this tribunal comprises of a chairman, and two other members appointed by the minister. </p>
                        </div>
                        <!--<p>{!! $homeIntro->detail ?? ''!!}</p>-->
                       
                        
                    </div>
                </div>
            </div>
                        <div class="row">
                <div class="col-lg-8 m-auto">
                     <p>
                           THE COUNCIL FUNCTIONS THROUGH COMMITTEES </p>
                           <ol>
                                <li>Education Committee</li>
                                <li>Examination Committee </li>
                                <li>Finance Committee</li>
                                <li>Registration Committee</li>
                                <li>Standards and Practice Committee</li>
                                <li>Discipline and Penal Cases Committee </li>
                                
                            </ol>
                          <p> 
                        </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-8 m-auto">
                     <p>
                            The Council seeks to produce better-equipped nurses and midwives with essential skills necessary for their line of work by:</p><ul>
                              <li>Prescribing requirements for people applying for training as nurses, clinical nurses, and midwives.</li>
                              <li>Providing programs and curricula for nurses, clinical nurses, and midwives in training.</li>
                              <li>Establishing, managing, and controlling schools for nurses, midwives, and clinical nurses; and regulating the instruction given at these institutions.</li>
                              <li>Prescribing examinations to be passed and other requirements by people wishing to register as a nurse and midwife or seeking to enroll as a clinical nurse.</li>
                              <li>Stipulating the functions of nurses, midwives, and clinical nurses and the nature of the services they offer.</li>
                              <li>Providing the establishment and control of agencies that utilize the services of nurses, midwives, and clinical nurses.</li>
                              <li>Making corrections to the register and the roll required by the Act to be kept.</li>
                              <li>Ensuring procedure is followed in regard to disciplinary inquiries.</li>
                              <li>Regulating the practice of midwifery and prescribing the powers and duties of Supervisors of Midwifery in any district.</li>
                              <li>Enforcing any other matter or thing which is required by the Act.</li>
                            </ul>
                          <p> 
                        </p>
                </div>
            </div>
        </div>
    </section>


    <section class="processSection">
        <div class="container">
            <div class="row processData" data-aos="flip-up">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!--<h3>Working Process</h3>-->
                    <h4 class="mb-3">VISION</h4>
                    <p>
                    To protect the Public through the enforcement of quality, nursing education, training, and Practice.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!--<h3>Working Process</h3>-->
                    <h4 class="mb-3">MISSION</h4>
                    <p>
                    Provide the legal framework to control education, training and practice of nurses and Midwives in the Commonwealth of The Bahamas. Establish and monitor the standards of professional Nursing and Midwifery through on-going collaboration with statutory accreditation body, Nursing schools and Health Professionals.
                    </p>
                </div>
                <!--<div class="col-lg-4 col-md-6 col-sm-12 text-end centerBTN">-->
                <!--    <a href="javascript:void(0)" class="btn mainThemeBtn shadow">More about our work </a>-->
                <!--</div>-->
            </div>
        </div>
        <!--<div class="container">-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-up" data-aos-duration="1000">-->
        <!--            <div class="processCard">-->
        <!--                <div class="banner">-->
        <!--                    <img src="{{ asset("assets/uploads/page-info/pic 5.jfif") }}" alt="Appointments" title="Appointments">-->
        <!--                </div>-->
        <!--                <a href="javascript:void(0)" class="btn mainThemeBtn shadow">Appointments</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-up" data-aos-duration="1500">-->
        <!--            <div class="processCard">-->
        <!--                <div class="banner">-->
        <!--                    <img src="{{ asset("assets/uploads/page-info/pic 4.png") }}" alt="Service & Care" title="Service & Care">-->
        <!--                </div>-->
        <!--                <a href="javascript:void(0)" class="btn mainThemeBtn shadow">Service & Care</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="zoom-in-up" data-aos-duration="2000">-->
        <!--            <div class="processCard">-->
        <!--                <div class="banner">-->
        <!--                    <img src="{{ asset("assets/uploads/page-info/pic 6.jfif") }}" alt="Expert Nurse" title="Expert Nurse">-->
        <!--                </div>-->
        <!--                <a href="javascript:void(0)" class="btn mainThemeBtn shadow">Expert Nurse</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </section>


    <!--<section class="aboutSection">-->
    <!--    <div class="container">-->

    <!--    </div>-->
    <!--</section>-->

    <!--<section class="sliderSection">-->
    <!--    <div class="container">-->
    <!--    <div class="row" data-aos="flip-up">-->
    <!--            <div class="col-lg-12 col-md-12 col-sm-12 text-center aboutData">-->
    <!--                <h3>Find out more</h3>-->
    <!--                <h4>About our work and role</h4>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row" data-aos="zoom-out">-->
    <!--            <div class="col-lg-12 col-md-12 col-sm-12">-->
                    <!--<div class="aboutSlider">-->
                        <!--@foreach ($slides as $slide)-->
                        <!--<div class="aboutSliderData">-->
                        <!--    <div class="banner">-->
                        <!--        <img src="{{ asset($slide->slide_image) }}" alt="Coronavirus (Covid-19)" title="Coronavirus (Covid-19)">-->
                        <!--    </div>-->
                        <!--    <div class="col-lg-8 col-md-12 col-sm-12 data">-->
                        <!--        <h3>{{ $slide->slide_title }}</h3>-->
                        <!--        <h4>{{ $slide->slide_sub_title }}</h4>-->
                        <!--        <div class="quote">-->
                        <!--            <p>{{ $slide->slide_details }}</p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--@endforeach-->
                    <!--</div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <section class="newsSection">
        <div class="container">
            <div class="row" data-aos="flip-up">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center newstData">
                    <h3>Our News & Updates</h3>
                    <h4>Get Much More Update</h4>
                </div>
            </div>
            <div class="row">
                    
                <div class="col-lg-4 col-md-12 col-sm-12"  data-aos="fade-up">
                    <div class="signleNews">
                <a href="{{ $mainNews->web_link ?? '#'}}" newsLinks target="_blank">
                        <div class="banner">
                            <!--<img src="{{ asset("front_assets/images/news-banner.png") }}" alt="News" title="News">-->
                        </div>
                        <div class="date">{{ date("d-M", strtotime($mainNews->created_at->toDateString())).', '. date("Y", strtotime($mainNews->created_at->toDateString()))}}</div>
                        <h3>{{ $mainNews->news_title }}</h3>
                        <p>{{ $mainNews->news_sub_title }}
                        </p>
                    </div>
                </a>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12" >
                    <div class="row">
                        @php
                        $duration = 1000;
                        @endphp

                        @foreach ($newses as $news)
                        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="{{ $duration }}">
                            <div class="newsData">
                        <a href="{{ $news->web_link ?? '#'}}" class="newsLinks" target="_blank">
                                <div class="date">{{ date("d-M", strtotime($news->created_at->toDateString())).', '. date("Y", strtotime($news->created_at->toDateString()))}}</div>
                                {{-- <div class="date">09 May, 2022</div> --}}
                                <h3>{{ $news->news_title }} </h3>
                                <p>{{ $news->news_sub_title }}
                                </p>
                            </div>
                        </a>
                        </div>
                        @php
                        $duration += 200;
                        @endphp
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-5">
                    <a href="http://www.tribune242.com/news/2023/feb/02/bipartisan-support-debate-begins-new-nurses-and-mi/" class="btn mainThemeBtn shadow" target="_blank">View All NCB News</a>
                    <!--<a href="{{ url('news-and-updates') }}" class="btn mainThemeBtn shadow">View All NCB News</a>-->
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
