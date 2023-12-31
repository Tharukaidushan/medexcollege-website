    <!-- footer area start -->
    <footer>
        <div class="footer__area">
            <div class="footer__top grey-bg-4 pt-95 pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50">
                                <div class="footer__logo">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/logo/medex-college-logo.png') }}"
                                                alt="Medex college logo" />
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__widget-info">
                                        <p>
                                            {!! $about->short_about !!}
                                        </p>
                                        <div class="footer__social">
                                            <h4>Follow Us</h4>

                                            <ul>
                                                <li>
                                                    <a href="{{ $general->facebook_link }}"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $general->instagram_link }}"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $general->youtube_link }}"><i
                                                            class="fa-brands fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget footer__widget-2 mb-50 footer-col-2-2">
                                <h3 class="footer__widget-title">Explore</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li>
                                            <a href="{{ route('about') }}">About us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('course.filter') }}">Courses</a>
                                        </li>
                                        <li>
                                            <a href="https://moodle.medexcollege.com/login" target="_blank">Moodle</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget footer__widget-2 mb-50 footer-col-2-3">
                                <h3 class="footer__widget-title">Courses</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('course.filter', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer__widget-2 footer-col-2-4 mb-50">
                                <h3 class="footer__widget-title">
                                    Sign up for our newsletter
                                </h3>
                                <div class="footer__subscribe">
                                    <p>
                                        Receive weekly newsletter with educational materials,
                                        popular books and much more!
                                    </p>
                                    <form action="#">
                                        <div class="footer__subscribe-input">
                                            <input type="text" placeholder="Email" />
                                            <button type="submit" class="tp-btn-subscribe">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom grey-bg-4">
                <div class="container">
                    <div class="footer__bottom-inner">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__copyright text-center">
                                    <p>© {{ date('Y') }} Medex College. All Rights Reserved | Design and Developed
                                        by Tharuka Idushan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
