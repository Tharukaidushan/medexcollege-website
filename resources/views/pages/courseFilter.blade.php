@extends('layouts.master')
@section('content')
<main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg" style="background-image: url(&quot;assets/img/breadcrumb/breadcrumb-bg-1.jpg&quot;);">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Our Courses</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.html">Home</a></span>
                           <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                           <span>Courses</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->


         <!-- course area start -->
         <section class="course__area pt-115 pb-90 grey-bg-3">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="course__tab-conent">
                              <div class="tab-content" id="courseTabContent">
                                 <div class="tab-pane fade show active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                 <div class="row">
                                       <div class="col-xxl-12">
                                          @if($courses != null)
                                             @foreach ($courses as $course)
                                             <div class="course__item course__item-list course__item-list-2 white-bg mb-30 fix transition-3">
                                                <div class="row gx-0">
                                                   <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                      <div class="course__thumb w-img p-relative fix">
                                                         <a href="course-details.html">
                                                            <img src="{{ asset('storage/' . $course->main_image) }}" alt="{{ $course->category->name }}">
                                                         </a>
                                                      </div>
                                                   </div>
                                                   <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                      <div class="course__right p-relative">
                                                         <div class="course__content p-relative">
                                                            <div class="course__tag-2">
                                                               <a href="#">{{ $course->category->name }}</a>
                                                            </div>
                                                            <h3 class="course__title">
                                                               <a href="{{ route('course.inner', ['course_slug' => $course->slug]) }}">{{ $course->title }}</a>
                                                            </h3>
                                 
                                                            <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                               <div class="course__tutor">
                                                                  <a href="{{ route('course.inner', ['course_slug' => $course->slug]) }}"><img src="{{ 'storage/'. $course->teacher->image  }}" alt="">{{ $course->teacher->first_name .' '. $course->teacher->last_name }}</a>
                                                               </div>
                                                               <div class="course__lesson">
                                                                  <a href="{{ route('course.inner', ['course_slug' => $course->slug]) }}"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                     <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                     <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                     <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                     </svg>
                                                                     {{ $course->lectures }} Lessons
                                                                  </a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                                            <div class="course__price-2">
                                                               <span>Rs. {{ $course->price }}</span>
                                                            </div>
                                                            <div class="course__btn">
                                                               <a href="{{ route('course.inner', ['course_slug' => $course->slug]) }}" class="link-btn-2">
                                                                  Know Details
                                                                  <i class="far fa-arrow-right"></i>
                                                                  <i class="far fa-arrow-right"></i>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          @endforeach
                                          @else
                                          <h2>No courses are available</h2>
                                          @endif
                                      
                                       </div>                                                                                                               
                                    </div>
                                 <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                 
                               </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="row">
                        <div class="col-xxl-12">
                           <div class="basic-pagination">
                              <nav>
                                 <ul>
                                    <li>
                                       <a href="course-v1.html">
                                          <i class="far fa-angle-left"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="course-v1.html">1</a>
                                    </li>
                                    <li>
                                       <span class="current">2</span>
                                    </li>
                                    <li>
                                       <a href="course-v1.html">3</a>
                                    </li>
                                    <li>
                                       <a href="course-v1.html">
                                          <i class="far fa-angle-right"></i>
                                       </a>
                                    </li>
                                 </ul>
                               </nav>
                           </div>
                        </div>
                     </div> -->
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="course__sidebar pl-70">
                        <div class="course__sidebar-widget white-bg">
                           <div class="course__sidebar-search">
                              <form action="#">
                                 <input type="text" placeholder="Search for courses...">
                                 <button type="submit">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                       <g>
                                          <g>
                                             <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"></path>
                                             <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"></path>
                                          </g>
                                       </g>
                                    </svg>
                                 </button>
                              </form>
                           </div>
                        </div>
                        <style>
                           .active-cat{
                              color: blue !important;
                              font-weight: 600;
                           }

                           .active-cat-box{
                              background-color: #3c66ed14;
                              padding: 10px;
                           }
                        </style>
                        <div class="course__sidebar-widget white-bg">
                           <div class="course__sidebar-info">
                              <h3 class="course__sidebar-title">Categories</h3>
                              <ul>
                              <li>
                                    <div class="course__sidebar-check mb-10 d-flex align-items-center">
                                      <a href="{{ route('course.filter') }}"> <label class="m-check-label" for="all-courses">All courses</label></a>
                                    </div>
                                 </li>
                              @foreach ($categories as $key => $category)
                                 <li>
                                    <div class="course__sidebar-check mb-10 d-flex align-items-center {{ $category->id == $selectedCategory->id ? 'active-cat-box': '' }}">
                                      <a href="{{ route('course.filter', ['category' => $category->name]) }}"> <label class="m-check-label active-cat" for="{{$category->id}}">{{ $category->name }}</label></a>
                                    </div>
                                 </li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- course area end -->


      </main>

      @endsection
