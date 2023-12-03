@extends('layouts.master')
@section('content')
    <style>
        .contact__item {
            min-height: 70vh;
        }

        p {
            font-size: 18px;
            line-height: 28px;
            color: var(--tp-text-11);
            padding-right: 50px px;
            margin-bottom: 30px;
        }
    </style>
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center p-relative z-index-1">
                            <h3 class="breadcrumb__title">About</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>About</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <section class="team__area pt-75 pb-85">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section__title-wrapper-2 mb-40">
                            <span class="section__title-pre-2">Medex College</span>
                            <h3 class="section__title-2">Our Story</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>{!! $about->about !!}</p>
                </div>
            </div>
        </section>
        <!-- brand area start -->
        <section class="brand__area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="brand__wrapper">
                            <div class="section__title-wrapper-2">
                                <span class="section__title-pre">Testimonials</span>
                                <h3 class="section__title section__title-30">Who will you learn with?</h3>
                            </div>
                            <p>You can list your partners or instructors's brands here to show off your site's reputation
                            </p>
                            <div class="brand__btn">
                                <a href="about.html" class="tp-btn-5 tp-btn-6">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="brand__item-wrapper pl-100">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-4.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-5.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-6.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="assets/img/brand/brand-7.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($about->vission)
            <!-- brand area end -->
            <section class="team__area pt-75 pb-85">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="section__title-wrapper-2 mb-40">
                                <span class="section__title-pre-2">Medex College</span>
                                <h3 class="section__title-2">Our Vision</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>{!! $about->vission !!}</p>
                    </div>
                </div>
            </section>
        @endif
        @if ($about->mission)
            <!-- brand area end -->
            <section class="team__area pt-75 pb-85">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="section__title-wrapper-2 mb-40">
                                <span class="section__title-pre-2">Medex College</span>
                                <h3 class="section__title-2">Our Vision</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>{!! $about->mission !!}</p>
                    </div>
                </div>
            </section>
        @endif

        <!-- team area start -->
        <section class="team__area pt-115 pb-60">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section__title-wrapper-2 mb-40">
                            <span class="section__title-pre-2">CEO Message</span>
                            <h3 class="section__title-2">Dear Esteemed Students,</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="team__item text-center mb-40">
                            <div class="team__thumb">
                                <img src="assets/img/team/team-1.png" alt="">
                                <div class="team__social transition-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="team__content">
                                <h3 class="team__title">
                                    <a href="team-details.html">Mr. Sameera Liyanaarachchi</a>
                                </h3>
                                <span class="team__designation">CEO, Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        It is with great pleasure and excitement that I extend a heartfelt welcome to each and every one of
                        you to Medex College. We are honored to have you join us on this transformative journey towards
                        excellence in healthcare education.
                        <br>
                        <br>
                        As the future healthcare leaders, you are the cornerstone of our institute's mission. Your
                        dedication to learning, compassion for patients, and commitment to advancing the field of healthcare
                        are the driving forces that will shape the future of health sciences.
                        <br>
                        <br>
                        At Medex College we take immense pride in providing an environment that fosters intellectual
                        curiosity, critical thinking, and hands-on experience. Our distinguished faculty and staff are
                        committed to nurturing your talents and guiding you towards becoming the best healthcare
                        professionals you can be.
                        <br>
                        <br>
                        Our curriculum is designed to not only impart knowledge but also to instill in you the values of
                        empathy, integrity, and a deep sense of responsibility towards the well-being of our patients. We
                        believe that a holistic approach to healthcare education is essential in preparing you to meet the
                        challenges of a rapidly evolving healthcare landscape.
                        <br>
                        <br>
                        Through cutting-edge research, hands-on clinical experiences, and a collaborative learning
                        environment, we aim to empower you with the skills and knowledge needed to excel in your chosen
                        field. Your journey at Medex College will be marked by opportunities for growth, personal
                        development, and the chance to make a meaningful difference in the lives of those you serve.
                        Remember, you are not only students, but future healers, caregivers, and innovators. Embrace the
                        challenges that lie ahead, for they are the stepping stones to your success and the betterment of
                        healthcare as a whole.
                        <br>
                        <br>
                        I encourage you to take full advantage of the resources and support available to you during your
                        time here. Engage with your peers, seek out mentorship, and immerse yourself in the rich learning
                        experiences that [Healthcare Institute] offers.
                        <br>
                        <br>
                        Once again, welcome to our vibrant community. Your presence here is a testament to your dedication
                        to the noble profession of healthcare. Together, let us embark on this journey of learning, growth,
                        and the pursuit of excellence.
                        <br>
                        <br>
                        With warm regards,<br><br>
                        Sameera Liyanaarachchi<br>
                        CEO, Founder<br>
                        Medex College of Health Sciences<br>

                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->


    </main>
@endsection
