        <!-- course enroll popup start -->
        <div class="course__popup">
            <!-- Modal -->
            <div class="modal fade" id="course_enroll_modal" tabindex="-1" aria-labelledby="course_enroll_modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="course__popup-wrapper p-relative">
                            <div class="course__popup-close">
                                <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                            </div>
                            <div class="course__popup-top d-flex align-items-start mb-40">
                                <div class="course__popup-thumb mr-20">
                                    <img src="{{ asset('storage/' . $course->teacher->image) }}" alt="{{ $course->title }}">
                                </div>
                                <div class="course__popup-content">
                                    <h3 class="course__popup-title">
                                        <a href="javascript:void(0)">{{ $course->title }}</a>
                                    </h3>
                                    <div class="course__sm-rating">
                                        <ul>
                                            <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                            <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                            <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                            <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                            <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="course__popup-info">
                                <form action="#">
                                    <div class="row gx-3">
                                        <div class="col-xl-12">
                                            <div class="course__popup-input">
                                                <input type="email" placeholder="Email">
                                                <span class="course__popup-input-icon"><i class="fa-light fa-envelope"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="course__popup-input">
                                                <input type="text" placeholder="Card Number">
                                                <span class="course__popup-input-icon"><i class="fa-light fa-credit-card"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="course__popup-input">
                                                <input type="text" placeholder="MM/YY">
                                                <span class="course__popup-input-icon"><i class="fa-light fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="course__popup-input">
                                                <input type="text" placeholder="CVC">
                                                <span class="course__popup-input-icon"><i class="fa-light fa-lock"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="course__popup-btn">
                                                <button type="submit" class="tp-btn w-100">Send your inquiry</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course enroll popup end -->