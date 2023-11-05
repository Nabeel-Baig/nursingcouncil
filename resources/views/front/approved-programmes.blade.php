@extends('layouts.front-master')
@section('main-content')

<main>
    <section class="abtHero blueDefaultBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <h2 class="innerMainTitle">Approved Programmes</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="abtContent pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainContent">
                        <h2 class="text-center mb-5">Search for approved nursing, midwifery or nursing associate education programmes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 ">
                    <div class="formSearch">
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="country" class="form-label"><b>Country</b></label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Please Select</option>
                                            <option value="1">England</option>
                                            <option value="3">Northern Ireland</option>
                                            <option value="2">Scotland</option>
                                            <option value="4">Wales</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label for="approved" class="form-label"><b>Approved education institution</b></label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="0" selected="selected">Please select</option>
                                            <option value="3620">Anglia Ruskin University</option>
                                            <option value="3516">Birmingham City University</option>
                                            <option value="8813">Bournemouth University</option>
                                            <option value="1701">BPP</option>
                                            <option value="3616">Brunel University London</option>
                                            <option value="1328">Buckinghamshire New University</option>
                                            <option value="8020">Canterbury Christ Church University</option>
                                            <option value="1509">City, University of London</option>
                                            <option value="0988">Coventry University</option>
                                            <option value="0215">De Montfort University</option>
                                            <option value="1317">Edge Hill University</option>
                                            <option value="8835">Keele University</option>
                                            <option value="8589">King's College London</option>
                                            <option value="1501">Kingston University (formerly &amp; St George's University)</option>
                                            <option value="8800">Leeds Beckett University</option>
                                            <option value="1945">Liverpool John Moores University</option>
                                            <option value="8831">London South Bank University</option>
                                            <option value="8707">Manchester Metropolitan University</option>
                                            <option value="0407">Middlesex University</option>
                                            <option value="8839">Nottingham Trent University</option>
                                            <option value="3558">Oxford Brookes University</option>
                                            <option value="1404">Sheffield Hallam University</option>
                                            <option value="9310">Solent University</option>
                                            <option value="9315">South Devon College</option>
                                            <option value="0956">Staffordshire University</option>
                                            <option value="1361">Teesside University</option>
                                            <option value="1502">The Open University</option>
                                            <option value="1327">The University of Hull</option>
                                            <option value="8836">University Campus Suffolk</option>
                                            <option value="9314">University College Birmingham</option>
                                            <option value="9060">University of Bedfordshire</option>
                                            <option value="1243">University Of Birmingham</option>
                                            <option value="3505">University of Bolton</option>
                                            <option value="0146">University of Bradford</option>
                                            <option value="8804">University Of Brighton</option>
                                            <option value="3643">University of Central Lancashire</option>
                                            <option value="1315">University of Chester</option>
                                            <option value="9320">University of Chichester</option>
                                            <option value="3610">University of Cumbria</option>
                                            <option value="8510">University of Derby</option>
                                            <option value="0541">University of East Anglia</option>
                                            <option value="8778">University Of East London</option>
                                            <option value="1508">University Of Essex</option>
                                            <option value="3638">University Of Exeter</option>
                                            <option value="3531">University of Gloucestershire</option>
                                            <option value="1371">University Of Greenwich</option>
                                            <option value="8834">University Of Hertfordshire</option>
                                            <option value="1506">University Of Huddersfield</option>
                                            <option value="1329">University Of Leeds</option>
                                            <option value="9309">University of Leicester</option>
                                            <option value="1512">University of Lincoln</option>
                                            <option value="3644">University Of Manchester</option>
                                            <option value="8823">University of Northampton</option>
                                            <option value="1362">University Of Northumbria At Newcastle</option>
                                            <option value="0256">University of Nottingham</option>
                                            <option value="6700">University Of Plymouth</option>
                                            <option value="1212">University Of Portsmouth</option>
                                            <option value="3512">University Of Reading</option>
                                            <option value="R48">University of Roehampton</option>
                                            <option value="1504">University of Salford</option>
                                            <option value="1310">University Of Sheffield</option>
                                            <option value="8933">University Of Southampton</option>
                                            <option value="9063">University of Suffolk</option>
                                            <option value="1505">University of Sunderland</option>
                                            <option value="6166">University of Surrey</option>
                                            <option value="8722">University Of The West Of England, Bristol</option>
                                            <option value="1247">University of West London</option>
                                            <option value="1326">University of Winchester</option>
                                            <option value="1023">University Of Wolverhampton</option>
                                            <option value="1001">University of Worcester</option>
                                            <option value="3611">University Of York</option>
                                            <option value="9318">York St John University</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="course" class="form-label"><b>Course</b></label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="0" selected="selected">Please select</option>
                                            <option value="Aptitude test - Adult nursing">Aptitude test - Adult nursing</option>
                                            <option value="Aptitude test - Children's nursing">Aptitude test - Children's nursing</option>
                                            <option value="Aptitude test - Mental health nursing">Aptitude test - Mental health nursing</option>
                                            <option value="Aptitude test - Midwifery">Aptitude test - Midwifery</option>
                                            <option value="Community Practitioner Nurse Prescribing V100">Community Practitioner Nurse Prescribing V100</option>
                                            <option value="Community Practitioner Nurse Prescribing V100 (pre-2018)">Community Practitioner Nurse Prescribing V100 (pre-2018)</option>
                                            <option value="Community Practitioner Nurse Prescribing V150">Community Practitioner Nurse Prescribing V150</option>
                                            <option value="Community Practitioner Nurse Prescribing V150 (pre-2018)">Community Practitioner Nurse Prescribing V150 (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Child">Dual Award - Pre-registration nursing - Adult/Child</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Child (pre-2018)">Dual Award - Pre-registration nursing - Adult/Child (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Learning Disabilities">Dual Award - Pre-registration nursing - Adult/Learning Disabilities</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Learning Disabilities (pre-2018)">Dual Award - Pre-registration nursing - Adult/Learning Disabilities (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Mental Health">Dual Award - Pre-registration nursing - Adult/Mental Health</option>
                                            <option value="Dual Award - Pre-registration nursing - Adult/Mental Health (pre-2018)">Dual Award - Pre-registration nursing - Adult/Mental Health (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Learning Disabilities/Child">Dual Award - Pre-registration nursing - Learning Disabilities/Child</option>
                                            <option value="Dual Award - Pre-registration nursing - Learning Disabilities/Child (pre-2018)">Dual Award - Pre-registration nursing - Learning Disabilities/Child (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Mental Health/Child">Dual Award - Pre-registration nursing - Mental Health/Child</option>
                                            <option value="Dual Award - Pre-registration nursing - Mental Health/Child (pre-2018)">Dual Award - Pre-registration nursing - Mental Health/Child (pre-2018)</option>
                                            <option value="Dual Award - Pre-registration nursing - Mental Health/Learning Disabilities">Dual Award - Pre-registration nursing - Mental Health/Learning Disabilities</option>
                                            <option value="Dual Award - Pre-registration nursing - Mental Health/Learning Disabilities (pre-2018)">Dual Award - Pre-registration nursing - Mental Health/Learning Disabilities (pre-2018)</option>
                                            <option value="EU Midwives Adaptation Programme">EU Midwives Adaptation Programme</option>
                                            <option value="EU Nurse Adaptation Programme - Adult">EU Nurse Adaptation Programme - Adult</option>
                                            <option value="EU Nurse Adaptation Programme - Child">EU Nurse Adaptation Programme - Child</option>
                                            <option value="EU Nurse Adaptation Programme - Learning Disabilities">EU Nurse Adaptation Programme - Learning Disabilities</option>
                                            <option value="EU Nurse Adaptation Programme - Mental Health">EU Nurse Adaptation Programme - Mental Health</option>
                                            <option value="Independent and Supplementary Nurse Prescribing">Independent and Supplementary Nurse Prescribing</option>
                                            <option value="Independent and Supplementary Nurse Prescribing (pre-2018)">Independent and Supplementary Nurse Prescribing (pre-2018)</option>
                                            <option value="Lecturer/Practice Educator">Lecturer/Practice Educator</option>
                                            <option value="Mentorship">Mentorship</option>
                                            <option value="Nursing Associate">Nursing Associate</option>
                                            <option value="Nursing Associate - Comparable">Nursing Associate - Comparable</option>
                                            <option value="Overseas Nurses Programme">Overseas Nurses Programme</option>
                                            <option value="Practice Teacher">Practice Teacher</option>
                                            <option value="Preparation of Supervisor of Midwives">Preparation of Supervisor of Midwives</option>
                                            <option value="Pre-registration Midwifery">Pre-registration Midwifery</option>
                                            <option value="Pre-registration Midwifery - Short course">Pre-registration Midwifery - Short course</option>
                                            <option value="Pre-registration Midwifery - Three year programme - 18 month programme (pre-2020)">Pre-registration Midwifery - Three year programme - 18 month programme (pre-2020)</option>
                                            <option value="Pre-registration nursing - Adult">Pre-registration nursing - Adult</option>
                                            <option value="Pre-registration nursing - Adult (pre-2018)">Pre-registration nursing - Adult (pre-2018)</option>
                                            <option value="Pre-registration nursing - Child">Pre-registration nursing - Child</option>
                                            <option value="Pre-registration nursing - Child (pre-2018)">Pre-registration nursing - Child (pre-2018)</option>
                                            <option value="Pre-registration nursing - Learning Disabilities">Pre-registration nursing - Learning Disabilities</option>
                                            <option value="Pre-registration nursing - Learning Disabilities (pre-2018)">Pre-registration nursing - Learning Disabilities (pre-2018)</option>
                                            <option value="Pre-registration nursing - Mental Health">Pre-registration nursing - Mental Health</option>
                                            <option value="Pre-registration nursing - Mental Health (pre-2018)">Pre-registration nursing - Mental Health (pre-2018)</option>
                                            <option value="Return to Practice - Health Visiting">Return to Practice - Health Visiting</option>
                                            <option value="Return to Practice - Midwifery">Return to Practice - Midwifery</option>
                                            <option value="Return to Practice - Midwifery (pre-2019)">Return to Practice - Midwifery (pre-2019)</option>
                                            <option value="Return to Practice - Midwifery/SCPHN">Return to Practice - Midwifery/SCPHN</option>
                                            <option value="Return to Practice - Nursing">Return to Practice - Nursing</option>
                                            <option value="Return to Practice - Nursing (pre-2019)">Return to Practice - Nursing (pre-2019)</option>
                                            <option value="Return to Practice - Nursing Associate">Return to Practice - Nursing Associate</option>
                                            <option value="SCPHN - Health Visiting with integrated V100 Nurse Prescribing">SCPHN - Health Visiting with integrated V100 Nurse Prescribing</option>
                                            <option value="Specialist Community Public Health Nursing – Family Health Nursing">Specialist Community Public Health Nursing – Family Health Nursing</option>
                                            <option value="Specialist Community Public Health Nursing – Generic">Specialist Community Public Health Nursing – Generic</option>
                                            <option value="Specialist Community Public Health Nursing – Health Visiting">Specialist Community Public Health Nursing – Health Visiting</option>
                                            <option value="Specialist Community Public Health Nursing – Health Visiting with integrated V100 Nurse Prescribing (pre-2018)">Specialist Community Public Health Nursing – Health Visiting with integrated V100 Nurse Prescribing (pre-2018)</option>
                                            <option value="Specialist Community Public Health Nursing – Occupational Health Nursing">Specialist Community Public Health Nursing – Occupational Health Nursing</option>
                                            <option value="Specialist Community Public Health Nursing – School Nursing">Specialist Community Public Health Nursing – School Nursing</option>
                                            <option value="Specialist Community Public Health Nursing Adaptation Programme – Health Visiting">Specialist Community Public Health Nursing Adaptation Programme – Health Visiting</option>
                                            <option value="Specialist Practitioner - Adult Nursing">Specialist Practitioner - Adult Nursing</option>
                                            <option value="Specialist Practitioner - Child">Specialist Practitioner - Child</option>
                                            <option value="Specialist Practitioner - Community Children’s Nursing">Specialist Practitioner - Community Children’s Nursing</option>
                                            <option value="Specialist Practitioner - Community Learning Disabilities Nursing">Specialist Practitioner - Community Learning Disabilities Nursing</option>
                                            <option value="Specialist Practitioner - Community Mental Health Nursing">Specialist Practitioner - Community Mental Health Nursing</option>
                                            <option value="Specialist Practitioner - District Nursing with integrated Independent and Supplementary Prescribing (V300)">Specialist Practitioner - District Nursing with integrated Independent and Supplementary Prescribing (V300)</option>
                                            <option value="Specialist Practitioner – District Nursing with integrated V100 and Independent and Supplementary Nurse Prescribing (V300)">Specialist Practitioner – District Nursing with integrated V100 and Independent and Supplementary Nurse Prescribing (V300)</option>
                                            <option value="Specialist Practitioner – District Nursing with integrated V100 Nurse Prescribing">Specialist Practitioner – District Nursing with integrated V100 Nurse Prescribing</option>
                                            <option value="Specialist Practitioner - District Nursing with integrated V100 Nurse Prescribing (pre-2018)">Specialist Practitioner - District Nursing with integrated V100 Nurse Prescribing (pre-2018)</option>
                                            <option value="Specialist Practitioner - District Nursing with Integrated V300">Specialist Practitioner - District Nursing with Integrated V300</option>
                                            <option value="Specialist Practitioner - General Practice Nursing">Specialist Practitioner - General Practice Nursing</option>
                                            <option value="Specialist Practitioner - Learning Disabilities">Specialist Practitioner - Learning Disabilities</option>
                                            <option value="Specialist Practitioner - Mental Health">Specialist Practitioner - Mental Health</option>
                                            <option value="Specialist Practitioner - Occupational Health Nursing">Specialist Practitioner - Occupational Health Nursing</option>
                                            <option value="Specialist Practitioner - School Nursing">Specialist Practitioner - School Nursing</option>
                                            <option value="Standards for pre-registration midwifery education: test of competence">Standards for pre-registration midwifery education: test of competence</option>
                                            <option value="Standards for pre-registration midwifery education: test of competence (pre-2020)">Standards for pre-registration midwifery education: test of competence (pre-2020)</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Adult field">Standards for pre-registration nursing education: test of competence - Adult field</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Adult field (pre-2018)">Standards for pre-registration nursing education: test of competence - Adult field (pre-2018)</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Child field">Standards for pre-registration nursing education: test of competence - Child field</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Child field (pre-2018)">Standards for pre-registration nursing education: test of competence - Child field (pre-2018)</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Learning Disabilities field">Standards for pre-registration nursing education: test of competence - Learning Disabilities field</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Learning Disabilities field (pre-2018)">Standards for pre-registration nursing education: test of competence - Learning Disabilities field (pre-2018)</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Mental Health field">Standards for pre-registration nursing education: test of competence - Mental Health field</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Mental Health field (pre-2018)">Standards for pre-registration nursing education: test of competence - Mental Health field (pre-2018)</option>
                                            <option value="Standards for pre-registration nursing education: test of competence - Nursing Associate">Standards for pre-registration nursing education: test of competence - Nursing Associate</option>
                                            <option value="Teacher Programme">Teacher Programme</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn mainThemeBtn shadow">Search</button>
                        </form>
                    </div>
                    <div class="accordion mt-5 mb-3" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <i class="fas fa-info-circle me-2"></i> How to use this tool
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show bg-warning" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    {!!
                                        $content->page_content;
                                    !!}
                                    {{-- <p>
                                        <b>Programmes the tool covers</b>
                                    </p>
                                    <p>
                                        This tool shows programmes that offer a formal qualification from our approved education providers. There are separate arrangements for nursing associate education programmes. Find out more about <a href="javascript:void(0);" class="defaultLink">becoming a nursing associate</a>
                                    </p>
                                    <p>
                                        <b>Getting the most out of your search</b>
                                    </p>
                                    <p>
                                        If you search only by country, you’ll receive a large number of results. You should also try searching by the course or approved education institution criteria.
                                    </p>
                                    <p>
                                        <b>Non-NMC approved courses</b>
                                    </p>
                                    <p>
                                        We've been made aware of a number of non NMC approved ‘nursing diploma’ courses being offered on various external websites. Please be aware that these courses do not contribute to a formal qualification from our approved education providers and will not lead to registration with us.
                                    </p>
                                    <p>
                                        <b>Compliance with our standards</b>
                                    </p>
                                    <p>
                                        The 'compliant with standards post-2018' column indicates whether or not a programme has been approved against the new standards for education and training. If it says ‘no’ in this column, this programme has not yet been approved against our new standards and has only been approved against our pre-2018 standards. Pre-2018 standards will remain in use until 1 September 2020.
                                    </p>
                                    <p>
                                        <b>Fall back awards</b>
                                    </p>
                                    <p>
                                        Please note that any approved programmes that contain “fall back award” within the programme title, are not direct entry routes i.e. students cannot enrol onto these courses.
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.front-components.sidemenubar')
            </div>
        </div>
    </section>
</main>

{{-- @include('layouts.front-components.iwant') --}}

@endsection

