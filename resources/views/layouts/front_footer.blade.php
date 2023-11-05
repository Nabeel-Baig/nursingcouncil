<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="footerLogo" href="index.php">
                    <img src="{{ asset("front_assets/nursing_new127.png") }}" alt="The Nursing Council" title="The Nursing Council">
                </a>
                <p>{{ $frontSetting->footer_infos ?? "Guide and promote excellence in the practice of Nursing in the Commonwealth of The Bahamas." }}</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5>Links</h5>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
                        <ul class="footerLinks">
                            <li><a href="javascript:void(0)">About us</a></li>
                            <li><a href="javascript:void(0)">Standards</a></li>
                            <li><a href="javascript:void(0)">Education</a></li>
                            <li><a href="javascript:void(0)">Concerns</a></li>
                            <li><a href="javascript:void(0)">Registration</a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
                        <ul class="footerLinks">
                            <li><a href="javascript:void(0)">Contact</a></li>
                            <li><a href="javascript:void(0)">Help</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Term of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5>News</h5>
                <ul class="footerNews text-start">
                    <li class="d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('front_assets/images/footer-news-1.png')}}" alt="News" title="News">
                        </div>
                        <div class="data">
                            <span>05 May, 2022</span>
                            <p>The best digital services for the startups</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset("front_assets/images/footer-news-2.png")}}" alt="News" title="News">
                        </div>
                        <div class="data">
                            <span>05 May, 2022</span>
                            <p>The best digital services for the startups</p>
                        </div>
                    </li>
                </ul>
            </div>
            --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5>Contact</h5>
                <ul class="footerContact">
                    <li class="d-flex">
                        <i class="fas fa-phone-alt"></i>
                        <!--<a href="javascript:void(0)">{{ $frontSetting->contact_number ?? "(242)6046015 / 6046017" }}</a>-->
                        <a href="javascript:void(0)">242-604-6015/604-6017</a>
                    </li>
                    <li class="d-flex">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:{{ $frontSetting->contact_email }}">info@nursingcouncilbahamas.com</a>
                    </li>
                    <li class="d-flex">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="javascript:void(0)">Virginia & Augusta Streets P.O. Box N-8506, Nassau, New Providence, The Bahamas </a>
                        <!--<a href="javascript:void(0)">{{ $frontSetting->location ?? "Virginia & Augusta Streets P.O. Box N-8506, Nassau, New Providence, The Bahamas " }}</a>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>© {{ $frontSetting->copyright_info ?? '2023' }}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="footerSocial">
                        <li><a href="{{ $frontSetting->fb_link }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="{{ $frontSetting->twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $frontSetting->youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="{{ $frontSetting->insta_link }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
