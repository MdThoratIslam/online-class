@extends('frontend.welcome')
@section('pages')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">{{ __('web_page.webTitle')  }}</h4>
                <h4 class="display-4 font-weight-bold text-white bangla-font">
                    প্রফেশনাল ওয়েব অ্যাপ্লিকেশন ডেভেলপমেন্ট
                </h4>
                {{--                <p class="text-white mb-4">--}}
                {{--                    Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed--}}
                {{--                    sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed--}}
                {{--                    ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo--}}
                {{--                    dolore.--}}
                {{--                </p>--}}
                {{--                <a href="" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>--}}
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="{{asset('frontend/img/bespoke.png')}}" alt="" />
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Play Ground</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Music and Dance</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div
                            class="d-flex bg-light shadow-sm border-top rounded mb-4"
                            style="padding: 30px"
                    >
                        <i
                                class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
                        ></i>
                        <div class="pl-4">
                            <h4>Arts and Crafts</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div
                            class="d-flex bg-light shadow-sm border-top rounded mb-4"
                            style="padding: 30px"
                    >
                        <i
                                class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
                        ></i>
                        <div class="pl-4">
                            <h4>Safe Transportation</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div
                            class="d-flex bg-light shadow-sm border-top rounded mb-4"
                            style="padding: 30px"
                    >
                        <i
                                class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
                        ></i>
                        <div class="pl-4">
                            <h4>Healthy food</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div
                            class="d-flex bg-light shadow-sm border-top rounded mb-4"
                            style="padding: 30px"
                    >
                        <i
                                class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
                        ></i>
                        <div class="pl-4">
                            <h4>Educational Tour</h4>
                            <p class="m-0">
                                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                                lorem amet elitr vero...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                {{--                <div class="col-lg-4">--}}
                {{--                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt=""/>--}}
                {{--                </div>--}}
                <div class="col-lg-12">
                    <p class="section-title pr-5">
                        <span class="pr-2">শেখার বিষয়ে জানুন</span>
                    </p>
                    <h1 class="mb-4">{{ __('web_page.webApplicationAbout.title') }}</h1>
                    <p>{{ __('web_page.webApplicationAbout.about') }}</p>
                    <div class="row pt-2 pb-4">
                        <?php
                        $listItems = [
                            [
                                'title' => 'ভিত্তিগত দক্ষতা',
                                'desc'  =>  'HTML/CSS: ওয়েব পেজ তৈরি এবং স্টাইল করার মূল বিষয়গুলো বুঝুন। জাভাস্ক্রিপ্ট: ওয়েব পৃষ্ঠাগুলিকে কীভাবে ইন্টারেক্টিভ করা যায় তা শিখুন।'
                            ],
                            [
                                'title' => 'ফ্রন্টএন্ড ডেভেলপমেন্ট',
                                'desc'  =>  'জাভাস্ক্রিপ্ট ফ্রেমওয়ার্ক/লাইব্রেরি: জটিল ইউজার ইন্টারফেস তৈরির জন্য React, Vue.js বা Angular এর মতো জনপ্রিয় ফ্রেমওয়ার্ক শিখুন। প্রতিক্রিয়াশীল ডিজাইন: বিভিন্ন ডিভাইসে (যেমন, বুটস্ট্র্যাপ, টেইলউইন্ড সিএসএস ব্যবহার করে) কাজ করে এমন ওয়েব অ্যাপ্লিকেশন তৈরির মাস্টার কৌশল। সংস্করণ নিয়ন্ত্রণ: পরিবর্তনগুলি ট্র্যাক করার জন্য এবং অন্যান্য বিকাশকারীদের সাথে সহযোগিতা করার জন্য গিট ব্যবহার করুন।'
                            ],
                            [
                                'title' => 'ব্যাকএন্ড ডেভেলপমেন্ট',
                                'desc'  =>  'প্রোগ্রামিং ভাষা: PHP, Python, Ruby, বা JavaScript (Node.js) এর মতো ব্যাকএন্ড ভাষা শিখুন। ফ্রেমওয়ার্ক: দ্রুত বিকাশের জন্য Laravel (PHP), Django (Python), Ruby on Rails বা Express (Node.js) এর মতো ওয়েব ফ্রেমওয়ার্ক ব্যবহার করুন। ডাটাবেস ম্যানেজমেন্ট: রিলেশনাল ডাটাবেস (MySQL, PostgreSQL) এবং NoSQL ডাটাবেস (MongoDB) বুঝুন। APIs: RESTful API এবং GraphQL কীভাবে তৈরি এবং ব্যবহার করবেন তা শিখুন।'
                            ],
                            [
                                'title' => 'ফুল-স্ট্যাক ডেভেলপমেন্ট',
                                'desc'  =>  'ইন্টিগ্রেশন: ফ্রন্টএন্ড এবং ব্যাকএন্ড উপাদানগুলিকে কীভাবে সংযুক্ত করতে হয় তা জানুন। প্রমাণীকরণ এবং অনুমোদন: ব্যবহারকারীর প্রমাণীকরণ (যেমন, OAuth, JWT) এবং ভূমিকা-ভিত্তিক অ্যাক্সেস নিয়ন্ত্রণ প্রয়োগ করুন। নিরাপত্তা: ডেটা এনক্রিপশন, ইনপুট যাচাইকরণ এবং API শেষ পয়েন্ট সুরক্ষিত করার মতো সাধারণ নিরাপত্তা অনুশীলন সম্পর্কে জানুন।'
                            ],
                            [
                                'title' => 'Deployment এবং DevOps ওয়েব সার্ভার',
                                'desc'  =>  'Nginx বা Apache এর মতো ওয়েব সার্ভারগুলি কীভাবে কনফিগার করতে হয় তা
                                বুঝুন। ক্লাউড পরিষেবা: AWS, Google ক্লাউড, বা Azure-এর মতো ক্লাউড প্ল্যাটফর্মের সাথে পরিচিত হন অ্যাপ্লিকেশন স্থাপন এবং স্কেলিং করার জন্য।CI/CD পাইপলাইন: স্বয়ংক্রিয় পরীক্ষা এবং স্থাপনার জন্য ক্রমাগত একীকরণ এবং ধারাবাহিক স্থাপনা (CI/CD) সম্পর্কে জানুন।'
                            ],
                            [
                                'title' => 'সর্বোত্তম অনুশীলন',
                                'desc'  =>  'পরীক্ষা: আপনার আবেদন নির্ভরযোগ্য কিনা তা নিশ্চিত করতে ইউনিট, ইন্টিগ্রেশন এবং এন্ড-টু-এন্ড পরীক্ষা লিখুন। কোডের গুণমান: পরিষ্কার, রক্ষণাবেক্ষণযোগ্য কোড লিখতে কোডিং মান এবং অনুশীলন (যেমন সলিড নীতি) অনুসরণ করুন। ডকুমেন্টেশন: আপনার কোড এবং APIগুলি সঠিকভাবে নথিভুক্ত করুন।'
                            ],
                            [
                                'title' => 'সফট স্কিল',
                                'desc'  =>  'সমস্যা-সমাধান: পদ্ধতিগতভাবে জটিল সমস্যাগুলির কাছে যাওয়ার এবং সমাধান করার ক্ষমতা বিকাশ করুন। সহযোগিতা: GitHub, Jira, বা Trello এর মতো টুল ব্যবহার করে একটি দলে কার্যকরভাবে কাজ করতে শিখুন। যোগাযোগ: অন্যান্য বিকাশকারী বা স্টেকহোল্ডারদের সাথে স্পষ্টভাবে প্রযুক্তিগত ধারণাগুলি যোগাযোগ করতে সক্ষম হন।'
                            ],
                        ];
                        
                        ?>
                        @php
                            $totalItems = count($listItems);
                            $i = 1;
                        @endphp
                        
                        @foreach ($listItems as $index => $item)
                            @if ($index % 4 == 0)
                                @if ($index != 0)
                                    </ul></div> {{-- Close previous column --}}
                    @endif
                    <div class="col-md-6 vl">
                        <ul class="list-inline m-0"> {{-- Start new column --}}
                            @endif
                            <li class="py-2 border-top border-bottom text-justify">
                                {{ $i }}&nbsp;<i class="fa fa-check text-primary mr-3"></i>
                                <strong>{{ $item['title'] }}</strong>: {{ $item['desc'] }}
                            </li>
                            @php $i++; @endphp
                            @endforeach
                            
                            {{-- Close the last column --}}
                            @if ($totalItems % 4 != 0)
                        </ul></div>
                    @endif
                
                
                
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Class Start -->
    <livewire:frontend.pages.components.about-section />
    <!-- Class End -->
    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Book A Seat</span>
                    </p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>
                        Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                        dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                        Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                            dolor amet diam
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                            amet ipsum
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                            elitripsum vero.
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input
                                            type="text"
                                            class="form-control border-0 p-4"
                                            placeholder="Your Name"
                                            required="required"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                            type="email"
                                            class="form-control border-0 p-4"
                                            placeholder="Your Email"
                                            required="required"
                                    />
                                </div>
                                <div class="form-group">
                                    <select
                                            class="custom-select border-0 px-4"
                                            style="height: 47px"
                                    >
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 1</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button
                                            class="btn btn-secondary btn-block border-0 py-3"
                                            type="submit"
                                    >
                                        Book Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Teachers</span>
                </p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{asset('frontend/img/team-1.jpg')}}" alt="" />
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                               href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{asset('frontend/img/team-2.jpg')}}" alt="" />
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{asset('frontend/img/team-3.jpg')}}" alt="" />
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src="{{asset('frontend/img/team-4.jpg')}}" alt="" />
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Testimonial</span>
                </p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img
                                class="rounded-circle"
                                src="img/testimonial-1.jpg"
                                style="width: 70px; height: 70px"
                                alt="Image"
                        />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img
                                class="rounded-circle"
                                src="img/testimonial-2.jpg"
                                style="width: 70px; height: 70px"
                                alt="Image"
                        />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img
                                class="rounded-circle"
                                src="img/testimonial-3.jpg"
                                style="width: 70px; height: 70px"
                                alt="Image"
                        />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                        eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img
                                class="rounded-circle"
                                src="img/testimonial-4.jpg"
                                style="width: 70px; height: 70px"
                                alt="Image"
                        />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Blog Start -->
{{--    <div class="container-fluid pt-5">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center pb-2">--}}
{{--                <p class="section-title px-5">--}}
{{--                    <span class="px-2">Latest Blog</span>--}}
{{--                </p>--}}
{{--                <h1 class="mb-4">Latest Articles From Blog</h1>--}}
{{--            </div>--}}
{{--            <div class="row pb-3">--}}
{{--                <div class="col-lg-4 mb-4">--}}
{{--                    <div class="card border-0 shadow-sm mb-2">--}}
{{--                        <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />--}}
{{--                        <div class="card-body bg-light text-center p-4">--}}
{{--                            <h4 class="">Diam amet eos at no eos</h4>--}}
{{--                            <div class="d-flex justify-content-center mb-3">--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-user text-primary"></i> Admin</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-folder text-primary"></i> Web Design</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-comments text-primary"></i> 15</small--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                            <p>--}}
{{--                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam--}}
{{--                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet--}}
{{--                                lorem. Tempor ipsum justo amet stet...--}}
{{--                            </p>--}}
{{--                            <a href="" class="btn btn-primary px-4 mx-auto my-2"--}}
{{--                            >Read More</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-4">--}}
{{--                    <div class="card border-0 shadow-sm mb-2">--}}
{{--                        <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="" />--}}
{{--                        <div class="card-body bg-light text-center p-4">--}}
{{--                            <h4 class="">Diam amet eos at no eos</h4>--}}
{{--                            <div class="d-flex justify-content-center mb-3">--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-user text-primary"></i> Admin</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-folder text-primary"></i> Web Design</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-comments text-primary"></i> 15</small--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                            <p>--}}
{{--                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam--}}
{{--                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet--}}
{{--                                lorem. Tempor ipsum justo amet stet...--}}
{{--                            </p>--}}
{{--                            <a href="" class="btn btn-primary px-4 mx-auto my-2"--}}
{{--                            >Read More</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-4">--}}
{{--                    <div class="card border-0 shadow-sm mb-2">--}}
{{--                        <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="" />--}}
{{--                        <div class="card-body bg-light text-center p-4">--}}
{{--                            <h4 class="">Diam amet eos at no eos</h4>--}}
{{--                            <div class="d-flex justify-content-center mb-3">--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-user text-primary"></i> Admin</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-folder text-primary"></i> Web Design</small--}}
{{--                                >--}}
{{--                                <small class="mr-3"--}}
{{--                                ><i class="fa fa-comments text-primary"></i> 15</small--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                            <p>--}}
{{--                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam--}}
{{--                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet--}}
{{--                                lorem. Tempor ipsum justo amet stet...--}}
{{--                            </p>--}}
{{--                            <a href="" class="btn btn-primary px-4 mx-auto my-2"--}}
{{--                            >Read More</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Blog End -->
@endsection