@extends('layouts.front-master') @section('main-content')



<main>

    <section class="abtHero blueDefaultBg">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">

                    <h2 class="innerMainTitle">

                        Becoming a Nurse, Midwife or Nursing Associate

                    </h2>

                </div>

            </div>

        </div>

    </section>



    <section class="intoSection">

        <div class="container-fluid">

            <div class="row mt-5 mb-3">

                <div class="col-lg-10 m-auto">

                    <h2>Registration of Midwives and Nurses</h2>

                    <p>

                        Persons wishing to operate as a nurse or a midwife in The Bahamas must first register with the Nursing Council’s Registrar. The Registrar records the name, personal information, and medical credentials of every nurse and midwife on the Register of Nurses and Register of Midwives.

                    </p>

                    <p>

                        If you are seeking to register as a nurse or midwife, you must:

                    </p>

                    <ul>

                        <li>Satisfy the Council that you have successfully completed in The Bahamas a course of training in nursing or midwifery recognized by the Council and have passed the examination or examinations set by the Council.

                        </li>

                        <li>Providing programs and curricula for nurses, clinical nurses, and midwives in training.</li>

                        <li>Satisfy the Council that you have successfully completed a course of training in midwifery or nursing at an overseas institution. recognized by the Council.

                        </li>

                        <li>Satisfy the Council that you are a person of good character, fit and proper to practice as a nurse or midwife in The Bahamas.

                        </li>

                    </ul>

                    <p> Upon meeting these requirements, approval of your application, and payment of the registration fee, the Council grants permission for your name to appear on the register.

                    </p>

                    <p>

                        Should you desire to enroll as a clinical nurse, your name and particulars must be entered by the Registrar on the Roll of Clinical Nurses. Submit to the Council an application for enrolment, with payment of the prescribed BS$100 fee, along with proof that you are a fit and proper person to train as a clinical nurse. Upon approval from the Council, a certificate of enrolment will be issued to you.

                    </p>

                </div>

            </div>



            <div class="row mb-3">

                <div class="col-lg-10 m-auto">

                    <h2>Nursing Licensing & Renewal </h2>

                    <p>

                        Persons seeking to establish a nursing agency or an agency where the services of nurses, midwives, and clinical nurses are sought must first obtain a license from the Nursing Council.

                    </p>

                    <p>

                        The Council reserves the right to refuse the application or revoke the issued license on these grounds:

                    </p>

                    <ul>

                        <li>The applicant or holder of the license is not a fit and proper person to hold such a license.



                        </li>

                        <li>There is no need or demand for the nursing service proposed in the application.

                        </li>

                        <li>The equipment, organization, and staffing arrangements of the agency are inadequate.

                        </li>

                        <li>The premises in which the agency is located are unsuitable.

                        </li>

                        <li>

                            The agency has been or is being improperly conducted.

                        </li>

                        <li>

                            Offenses against the Act or any regulations made thereto have been committed in connection with the carrying on of the agency.

                        </li>

                        <li>

                            There is a failure to comply with a requirement of a law regulating the carrying on of that agency.

                        </li>

                        <li>

                            There is a failure to comply with the uniform code, code of ethics, or standard of nursing care specified by the Nursing Council.

                        </li>

                    </ul>

                    <p> If granted, the license is valid for one year and afterward must be renewed. The license should always be displayed prominently on the owner’s premises.

                    </p>



                    <h4 class="mt-2">

                        Eligibility

                    </h4>

                    <p>

                        Anyone interested in establishing a nursing facility may apply.

                    </p>

                    <h4 class="mt-2">

                        Process

                    </h4>

                    <ul>

                        <li>

                            Complete the application form.

                        </li>

                        <li>

                            Send the fee payment along with the application and supporting documents to the Nursing Council.

                        </li>

                    </ul>

                    <p>

                        After receipt of the application, the Council will place a notice in at least two newspapers published and circulated in The Bahamas and twice in the Gazette. A public hearing of the application is called, and the Council decides to approve or reject the application within 30 days.

                    </p>

                    <h4 class="mt-2">

                        Application Form(s)

                    </h4>

                    <ul>

                        <li>

                            <!--<a href="http://forms.bahamas.gov.bs/documents/HEALTH_nursingAgencyRegistration.pdf">Nursing Agencies Licensing Form</a>-->

                            <a href="{{asset('assets/forms/Application form for Nursing Agency.pdf')}}" target="_blank">Nursing Agencies Licensing Form</a>

                        </li>

                        <li>

                            <a href="{{asset('assets/forms/Renewal of Agency Licence.pdf')}}" target="_blank">Application Form for Renewal of Licence</a>

                            <!--<a href="http://forms.bahamas.gov.bs/documents/HEALTH_nursingAgencyRegistration.pdf">Application Form for Renewal of Licence</a>-->

                        </li>

                    </ul>

                    <p>

                        These forms are also available at the offices of the Nursing Council.

                    </p>

                    <h4 class="mt-2">

                        Turn-around time

                    </h4>

                    <p>

                        30 days

                    </p>

                    <h4 class="mt-2">

                        Deadline

                    </h4>

                    <p>

                        Not applicable

                    </p>

                    <h4 class="mt-2">

                        Related Fee(s)

                    </h4>

                    <ul>

                        <li>

                            BS$300.00 Registration Fee

                        </li>

                        <li>

                            BS$75.00 Processing Fee

                        </li>

                        <li>

                            BS$100.00 for a duplicate license if your license is lost, damaged, or destroyed.

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>



    <section class="abtContent pt-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="mainContent">

                        <h2 class="text-center">

                            How to train as a nurse, midwife or nursing associate

                        </h2>

                    </div>

                </div>

            </div>

            <div class="row pt-5">

                @foreach ($cardSlides as $cardSlide)

                <div class="col-lg-4 mb-4">

                    <a href="javascript:void(0);" class="cardLinkTo">

                        <div class="card text-center h-100 pt-3 pb-3 shadow">

                            <div class="card-body">

                                <div class="card-title mb-0">

                                    <h5 class="mb-0">

                                        <b>{{ $cardSlide->card_title ?? '' }}</b>

                                    </h5>

                                    <p>{{ $cardSlide->card_details ?? '' }}</p>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                @endforeach

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

</main>



@include('layouts.front-components.iwant') @endsection