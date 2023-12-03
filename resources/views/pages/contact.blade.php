@extends('layouts.master')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center p-relative z-index-1">
                            <h3 class="breadcrumb__title">Contact</h3>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <section class="contact__area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-6">
                        <div class="contact__wrapper">
                            <div class="section__title-wrapper mb-40">
                                <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big"> touch<img
                                            src="{{ asset('assets/img/shape/yellow-bg.html') }}" alt=""></span></h2>
                                <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                            </div>
                            <div class="contact__form">
                                <form id="contact-form" method="post">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input name="name" type="text" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input name="email" type="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <style>
                                            .nice-select {
                                                padding: 10px 20px !important;
                                            }

                                            .course__sort-inner,
                                            .nice-select {
                                                width: 100% !important;
                                                height: 53px !important;
                                                line-height: 37px !important;
                                                background: var(--tp-grey-2);
                                                margin-bottom: 20px !important;
                                            }
                                        </style>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <div class="course__sort-inner">
                                                    <select style="display: none;">
                                                        @foreach ($courses as $item)
                                                            <option>{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">
                                                            Select course
                                                        </span>
                                                        <ul class="list">
                                                            @foreach ($courses as $item)
                                                                <li data-value="{{ $item->title }}" class="option">
                                                                    {{ $item->title }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <input name="subject" type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <textarea name="message" placeholder="Enter Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-agree  d-flex align-items-center mb-20">
                                                <input class="e-check-input" type="checkbox" id="e-agree">
                                                <label class="e-check-label" for="e-agree">I agree to the<a
                                                        href="#">Terms & Conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__btn">
                                                <button type="submit" class="tp-btn">Send your message</button>
                                            </div>
                                            <p class="ajax-response"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                        <div class="contact__info white-bg p-relative z-index-1">
                            <div class="contact__shape">
                                <img class="contact-shape-1" src="#" alt="">
                                <img class="contact-shape-2" src="#" alt="">
                                <img class="contact-shape-3" src="#" alt="">
                            </div>
                            <div class="contact__info-inner white-bg">
                                <ul>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="map" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z" />
                                                    <circle class="st0" cx="12" cy="10" r="3" />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>Head Office</h4>
                                                <p><a target="_blank" href="{{ $general->location }}">Medex Pharmacy
                                                        Grocery
                                                        and Nursing services
                                                        No 883, Debarawewa, Tissamaharama</a></p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="mail" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z" />
                                                    <polyline class="st0" points="22,6 12,13 2,6 " />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>Email us directly</h4>
                                                <p><a href="mailto:{{ $general->main_email }}"><span
                                                            class="__cf_email__">{{ $general->main_email }}</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="call" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z" />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>Phone</h4>
                                                <p><a href="tel:{{ $general->number }}">{{ $general->number }}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact__social pl-30">
                                    <h4>Follow Us</h4>
                                    <ul>
                                        <li><a href="{{ $general->facebook_link }}" class="fb"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="{{ $general->instagram_link }}" class="tw"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="{{ $general->youtube_link }}" class="pin"><i
                                                    class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->


    </main>
@endsection
