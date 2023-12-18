@extends('layouts.master')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
            data-background="{{ asset('storage/' . $course->breadcrum_image) }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center p-relative z-index-1">
                            <h3 class="breadcrumb__title">{{ $course->title }}</h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('home') }}">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>Courses</span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>{{ $course->slug }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->


        <!-- course area start -->
        <section class="course__area pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="course__wrapper">
                            <div class="page__title-content mb-25">
                                <div class="breadcrumb__list breadcrumb__list-2 mb-10">
                                    <span><a href="#">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Courses</span>
                                </div>
                                <span class="breadcrumb__title-pre">{{ $course->category->name }}</span>
                                <h5 class="breadcrumb__title-2">{{ $course->title }}</h5>
                            </div>
                            <div class="course__meta-2 d-sm-flex align-items-center mb-30">
                                <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                                    <div class="course__teacher-thumb-3 mr-15">
                                        <img src="{{ asset('storage/' . $course->teacher->image) }}"
                                            alt="{{ $course->title }}">
                                    </div>
                                    <div class="course__teacher-info-3">
                                        <h5>Teacher</h5>
                                        <p><a
                                                href="#">{{ $course->teacher->surname . ' ' . $course->teacher->first_name . ' ' . $course->teacher->last_name }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="course__update mr-80 mb-30">
                                    <h5>Last Update:</h5>
                                    <p>{{ $course->updated_at }}</p>
                                </div>
                                <div class="course__rating-2 mb-30">
                                    <h5>Review:</h5>
                                    <div class="course__rating-inner d-flex align-items-center">
                                        <ul>
                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        </ul>
                                        <p>4.5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="course__img w-img mb-30">
                                <img src="{{ asset('storage/' . $course->main_image) }}" alt="{{ $course->title }}">
                            </div>
                            <div class="course__tab-2 mb-45">
                                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true"><i
                                                class="fa-regular fa-medal"></i> <span>Description</span> </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab"
                                            data-bs-target="#curriculum" type="button" role="tab"
                                            aria-controls="curriculum" aria-selected="false"><i
                                                class="fa-regular fa-book-blank"></i> <span>Curriculum</span> </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                            aria-selected="false"> <i class="fa-regular fa-star"></i> <span>Reviews</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="course__tab-content mb-95">
                                <div class="tab-content" id="courseTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="course__description">
                                            <h3>Course Overview</h3>
                                            <p>{!! $course->long_description !!}
                                            </p>
                                            @if ($course->qualifications)
                                                <div class="course__description-list mb-45">
                                                    <h4>What are the entry qualifications?</h4>
                                                    <ul>
                                                        {!! str_replace(
                                                            '<li>',
                                                            '
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li> <i class="fa-solid fa-check"></i>',
                                                            $course->qualifications,
                                                        ) !!}
                                                    </ul>
                                                </div>
                                            @endif
                                            @if ($course->duration)
                                                <div class="course__description-list mb-45">
                                                    <h4>Course Duration</h4>
                                                    <ul>
                                                        {!! str_replace(
                                                            '<li>',
                                                            '
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li> <i class="fa-solid fa-check"></i>',
                                                            $course->duration,
                                                        ) !!}
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="course__instructor mb-45">
                                                <h3>Other Instructors</h3>
                                                <div class="course__instructor-wrapper d-md-flex align-items-center">
                                                    <div class="course__instructor-item d-flex align-items-center mr-70">
                                                        <div class="course__instructor-thumb mr-20">
                                                            <img src="{{ asset('storage/' . $course->teacher->image) }}"
                                                                alt="{{ $course->title }}">
                                                        </div>
                                                        <div class="course__instructor-content">
                                                            <h3>{{ $course->teacher->first_name . ' ' . $course->teacher->last_name }}
                                                            </h3>
                                                            <p>{{ $course->teacher->qualification }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                        aria-labelledby="curriculum-tab">
                                        @if ($contents != null)
                                            <div class="course__curriculum">
                                                @foreach ($contents->topics as $topic)
                                                    <div class="accordion" id="course__accordion">
                                                        <div class="accordion-item mb-50">
                                                            <h2 class="accordion-header" id="{{ $topic['topic_code'] }}">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#{{ $topic['topic_code'] }}-content"
                                                                    aria-expanded="true"
                                                                    aria-controls="{{ $topic['topic_code'] }}-content">

                                                                    {{ $topic['topic_code'] . ' - ' . $topic['topics'] }}
                                                                </button>
                                                            </h2>
                                                            <div id="{{ $topic['topic_code'] }}-content"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="{{ $topic['topic_code'] }}"
                                                                data-bs-parent="#course__accordion">
                                                                <div class="accordion-body">
                                                                    @foreach ($topic['sub_topics'] as $subTopic)
                                                                        <div
                                                                            class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                            <div class="course__curriculum-info">
                                                                                <svg class="document" viewBox="0 0 24 24">
                                                                                    <path class="st0"
                                                                                        d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                                    <polyline class="st0"
                                                                                        points="14,2 14,8 20,8 " />
                                                                                    <line class="st0" x1="16"
                                                                                        y1="13" x2="8"
                                                                                        y2="13" />
                                                                                    <line class="st0" x1="16"
                                                                                        y1="17" x2="8"
                                                                                        y2="17" />
                                                                                    <polyline class="st0"
                                                                                        points="10,9 9,9 8,9 " />
                                                                                </svg>
                                                                                <h3> <span>Reading:
                                                                                    </span>{{ $subTopic['sub_topic_name'] }}
                                                                                </h3>
                                                                            </div>
                                                                            @if ($subTopic['duration'])
                                                                                <div class="course__curriculum-meta">
                                                                                    <span
                                                                                        class="question">{{ $subTopic['duration'] . ' minutes' }}</span>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel"
                                        aria-labelledby="review-tab">
                                        <div class="course__review">
                                            <h3>Reviews</h3>
                                            <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's
                                                your father bugger all mate off his nut that, what a plonker cuppa owt to do
                                            </p>

                                            <div class="course__review-rating mb-50">
                                                <div class="row g-0">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <div class="course__review-rating-info grey-bg-2 text-center">
                                                            <h5>5</h5>
                                                            <ul>
                                                                <li><a href="#"> <i class="fa-solid fa-star"></i>
                                                                    </a></li>
                                                                <li><a href="#"> <i class="fa-solid fa-star"></i>
                                                                    </a></li>
                                                                <li><a href="#"> <i class="fa-solid fa-star"></i>
                                                                    </a></li>
                                                                <li><a href="#"> <i class="fa-solid fa-star"></i>
                                                                    </a></li>
                                                                <li><a href="#"> <i class="fa-solid fa-star"></i>
                                                                    </a></li>
                                                            </ul>
                                                            <p>4 Ratings</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                                        <div class="course__review-details grey-bg-2">
                                                            <h5>Detailed Rating</h5>
                                                            <div class="course__review-content mb-20">
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>5 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="100%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>100%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>4 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="30%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>30%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>3 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>2 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="course__review-item d-flex align-items-center justify-content-between">
                                                                    <div class="course__review-text">
                                                                        <span>1 stars</span>
                                                                    </div>
                                                                    <div class="course__review-progress">
                                                                        <div class="single-progress" data-width="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="course__review-percent">
                                                                        <h5>0%</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course__comment mb-75">
                                                <h3 class="course__comment-title">2 Comments</h3>

                                                <ul>
                                                    <li>
                                                        <div class="course__comment-box ">
                                                            <div class="course__comment-thumb float-start">
                                                                <img src="assets/img/course/comment/course-comment-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="course__comment-content">
                                                                <div class="course__comment-wrapper ml-70 fix">
                                                                    <div class="course__comment-info float-start">
                                                                        <h4>Eleanor Fant</h4>
                                                                        <span>July 14, 2022</span>
                                                                    </div>
                                                                    <div
                                                                        class="course__comment-rating float-start float-sm-end">
                                                                        <ul>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="course__comment-text ml-70">
                                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger
                                                                        cuppa gosh David blatant have it, standard A bit of
                                                                        how's your father my lady absolutely.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="children">
                                                        <div class="course__comment-box ">
                                                            <div class="course__comment-thumb float-start">
                                                                <img src="assets/img/course/comment/course-comment-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="course__comment-content">
                                                                <div class="course__comment-wrapper ml-70 fix">
                                                                    <div class="course__comment-info float-start">
                                                                        <h4>Eleanor Fant</h4>
                                                                        <span>July 14, 2022</span>
                                                                    </div>
                                                                    <div
                                                                        class="course__comment-rating float-start float-sm-end">
                                                                        <ul>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="course__comment-text ml-70">
                                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger
                                                                        cuppa gosh David blatant have it, standard A bit of
                                                                        how's your father my lady absolutely.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course__comment-box ">
                                                            <div class="course__comment-thumb float-start">
                                                                <img src="assets/img/course/comment/course-comment-2.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="course__comment-content">
                                                                <div class="course__comment-wrapper ml-70 fix">
                                                                    <div class="course__comment-info float-start">
                                                                        <h4>Shahnewaz Sakil</h4>
                                                                        <span>July 17, 2022</span>
                                                                    </div>
                                                                    <div
                                                                        class="course__comment-rating float-start float-sm-end">
                                                                        <ul>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="course__comment-text ml-70">
                                                                    <p>David blatant have it, standard A bit of how's your
                                                                        father my lady absolutely.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="course__form">
                                                <h3 class="course__form-title">Write a Review</h3>
                                                <div class="course__form-inner">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-xxl-6">
                                                                <div class="course__form-input">
                                                                    <input type="text" placeholder="Your Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="course__form-input">
                                                                    <input type="email" placeholder="Your Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-input">
                                                                    <input type="text" placeholder="Review Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-input">
                                                                    <div class="course__form-rating">
                                                                        <span>Rating : </span>
                                                                        <ul>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#" class="no-rating"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                            <li><a href="#" class="no-rating"> <i
                                                                                        class="fa-solid fa-star"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <textarea placeholder="Review Summary"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xxl-12">
                                                                <div class="course__form-btn mt-10 mb-55">
                                                                    <button type="submit" class="tp-btn">Submit
                                                                        Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course__share">
                                        <h3>Share :</h3>
                                        <ul>
                                            <li><a href="#" class="fb"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="pin"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="course__related">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="section__title-wrapper mb-40">
                                            <h2 class="section__title">Related Course</h2>
                                            <p>You don't have to struggle alone, you've got our assistance and help.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="course__sidebar pl-70 p-relative">
                            <div class="course__shape">
                                <img class="course-dot" src="{{ asset('assets/img/course/course-dot.png') }}"
                                    alt="">
                            </div>
                            <div class="course__sidebar-widget-2 white-bg mb-20">
                                <div class="course__video">
                                    <div class="course__video-thumb w-img mb-25">
                                        <img src="{{ asset('assets/img/course/video/course-video.jpg') }}"
                                            alt="">
                                        <div class="course__video-play">
                                            <a href="https://youtu.be/vByM9W-qH3o" class="play-btn popup-video"> <i
                                                    class="fas fa-play"></i> </a>
                                        </div>
                                    </div>
                                    <div
                                        class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                                        <div class="course__video-price">
                                            <h5>Rs {{ $course->price }}</span> </h5>
                                        </div>
                                        @if ($course->discount != 0)
                                            <div class="course__video-discount">
                                                <span>{{ $course->discount }}% OFF</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="course__video-content mb-35">
                                        <ul>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                                                        xml:space="preserve">
                                                        <path class="st0"
                                                            d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                        <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Instructor :</span> {{ $course->teacher->first_name }}</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                                                        xml:space="preserve">

                                                        <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20" />
                                                        <path class="st0"
                                                            d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Lectures :</span>{{ $course->lectures ?? '-' }}</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                                                        xml:space="preserve">
                                                        <circle class="st0" cx="8" cy="8" r="6.7" />
                                                        <polyline class="st0" points="8,4 8,8 10.7,9.3 " />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Duration :</span>{!! $course->duration !!} weeks</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg>
                                                        <path class="st0"
                                                            d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14" />
                                                        <circle class="st0" cx="8" cy="4.7" r="2.7" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Enrolled :</span>{{ $course->student_count }} students</h5>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="course__video-icon">
                                                    <svg>
                                                        <circle class="st0" cx="8" cy="8" r="6.7" />
                                                        <line class="st0" x1="1.3" y1="8"
                                                            x2="14.7" y2="8" />
                                                        <path class="st0"
                                                            d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z" />
                                                    </svg>
                                                </div>
                                                <div class="course__video-info">
                                                    <h5><span>Language :</span>English</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="course__payment mb-35">
                                        <h3>Payment:</h3>
                                        <a href="#">
                                            <img src="{{ asset('assets/img/course/payment/payment-1.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    @php
                                        $message = '       ';
                                    @endphp
                                    <div class="course__enroll-btn">
                                        <a href="https://wa.me/742142155?text=Hi,%20{{ $course->title }}%20course!,%20I'm%20interested%20in%20this%20course,%20please%20send%20me%20more%20details."
                                            class="tp-btn w-100 text-center">Enroll <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <livewire:inquiry-form :course="$course" :wire:key="$course->id" />


    </main>
@endsection
