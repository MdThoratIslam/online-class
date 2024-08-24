@include('frontend.layout.htmlHead')
<body>
    <!-- Navbar Start -->
        <div class="container-fluid bg-light position-relative shadow">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
                <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-secondary bangla-font">ই-লার্নিং প্ল্যাটফর্ম</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav font-weight-bold mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link active bangla-font">হোম</a>
                        <a href="about.html" class="nav-item nav-link bangla-font">এবাউট</a>
                        <a href="class.html" class="nav-item nav-link bangla-font">ক্লাস</a>
                        <a href="team.html" class="nav-item nav-link bangla-font">শিক্ষকরা</a>
                        <a href="gallery.html" class="nav-item nav-link bangla-font">গ্যালারি</a>
                    </div>
    {{--        <div class="nav-item dropdown">--}}
    {{--            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>--}}
    {{--            <div class="dropdown-menu rounded-0 m-0">--}}
    {{--                <a href="blog.html" class="dropdown-item">Blog Grid</a>--}}
    {{--                <a href="single.html" class="dropdown-item">Blog Detail</a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
            <a href="contact.html" class="nav-item nav-link bangla-font">যোগাযোগ</a>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary px-4 bangla-font">
                    ড্যাশবোর্ড
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4 bangla-font">লগ ইন</a>&nbsp;
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary px-4 bangla-font">নিবন্ধন</a>
        @endif
        @endauth
        </div>
        @endif
        </nav>
        </div>
    <!-- Navbar End -->
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">ই-লার্নিং প্ল্যাটফর্ম</h4>
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
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt=""/>
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2 bangla-font">সম্পর্কে জানুন</span>
                    </p>
                    <h1 class="mb-4 bangla-font">প্রফেশনাল ওয়েব অ্যাপ্লিকেশন</h1>
                    <p class="bangla-font">
                        প্রফেশনাল ওয়েব অ্যাপ্লিকেশন বিকাশের জন্য প্রযুক্তিগত দক্ষতা, ওয়েব প্রযুক্তি বোঝা এবং ভাল বিকাশ অনুশীলনের সমন্বয় প্রয়োজন। এখানে আপনাকে সাধারণত যা শিখতে হবে:
                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="{{asset('frontend/img/about-2.jpg')}}" alt="" />
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom">
                                    <i class="fa fa-check text-primary mr-3 text-justify"></i><strong>ভিত্তিগত দক্ষতা</strong>:  HTML/CSS: ওয়েব পেজ তৈরি এবং স্টাইল করার মূল বিষয়গুলো বুঝুন। জাভাস্ক্রিপ্ট: ওয়েব পৃষ্ঠাগুলিকে কীভাবে ইন্টারেক্টিভ করা যায় তা শিখুন।
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i><strong>ফ্রন্টএন্ড ডেভেলপমেন্ট</strong>: জাভাস্ক্রিপ্ট ফ্রেমওয়ার্ক/লাইব্রেরি: জটিল ইউজার ইন্টারফেস তৈরির জন্য React, Vue.js বা Angular এর মতো জনপ্রিয় ফ্রেমওয়ার্ক শিখুন। প্রতিক্রিয়াশীল ডিজাইন: বিভিন্ন ডিভাইসে (যেমন, বুটস্ট্র্যাপ, টেইলউইন্ড সিএসএস ব্যবহার করে) কাজ করে এমন ওয়েব অ্যাপ্লিকেশন তৈরির মাস্টার কৌশল। সংস্করণ নিয়ন্ত্রণ: পরিবর্তনগুলি ট্র্যাক করার জন্য এবং অন্যান্য বিকাশকারীদের সাথে সহযোগিতা করার জন্য গিট ব্যবহার করুন।
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i><strong>ব্যাকএন্ড ডেভেলপমেন্ট</strong>: প্রোগ্রামিং ভাষা: PHP, Python, Ruby, বা JavaScript (Node.js) এর মতো ব্যাকএন্ড ভাষা শিখুন। ফ্রেমওয়ার্ক: দ্রুত বিকাশের জন্য Laravel (PHP), Django (Python), Ruby on Rails বা Express (Node.js) এর মতো ওয়েব ফ্রেমওয়ার্ক ব্যবহার করুন। ডাটাবেস ম্যানেজমেন্ট: রিলেশনাল ডাটাবেস (MySQL, PostgreSQL) এবং NoSQL ডাটাবেস (MongoDB) বুঝুন। APIs: RESTful API এবং GraphQL কীভাবে তৈরি এবং ব্যবহার করবেন তা শিখুন।
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i><strong>ফুল-স্ট্যাক ডেভেলপমেন্ট</strong>:  ইন্টিগ্রেশন: ফ্রন্টএন্ড এবং ব্যাকএন্ড উপাদানগুলিকে কীভাবে সংযুক্ত করতে হয় তা জানুন। প্রমাণীকরণ এবং অনুমোদন: ব্যবহারকারীর প্রমাণীকরণ (যেমন, OAuth, JWT) এবং ভূমিকা-ভিত্তিক অ্যাক্সেস নিয়ন্ত্রণ প্রয়োগ করুন। নিরাপত্তা: ডেটা এনক্রিপশন, ইনপুট যাচাইকরণ এবং API শেষ পয়েন্ট সুরক্ষিত করার মতো সাধারণ নিরাপত্তা অনুশীলন সম্পর্কে জানুন।
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Deployment & DevOps: Web servers, cloud services, CI/CD
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Best Practices: Testing, code quality, documentation
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Soft Skills: Problem-solving, collaboration, communication
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Continuous Learning: Stay updated with the latest trends
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt=""/>
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Learn About Us</span>
                    </p>
                    <h1 class="mb-4">Professional Web Application Development</h1>
                    <p>
                        Professional web application development requires a combination of technical skills, understanding of web technologies, and good development practices. Here's what you typically need to learn:
                    </p>
                    <div class="row pt-2 pb-4">
                        <?php
                        $listItems = [
                            "Foundational Skills: HTML, CSS, JavaScript",
                            "Frontend Development: JavaScript frameworks, responsive design",
                            "Backend Development: Programming languages, frameworks, databases",
                            "Full-Stack Development: Integration, security, authentication",
                            "Deployment & DevOps: Web servers, cloud services, CI/CD",
                            "Best Practices: Testing, code quality, documentation",
                            "Soft Skills: Problem-solving, collaboration, communication",
                            "Continuous Learning: Stay updated with the latest trends"
                        ];

                        $totalItems = count($listItems);
                        foreach ($listItems as $index => $item) {
                            if ($index % 3 == 0) {
                                if ($index != 0)
                                {
                                    echo '</ul></div>';
                                }
                                echo '<div class="col-md-6"><ul class="list-inline m-0">';
                            }
                            echo '<li class="py-2 border-top border-bottom">';
                            echo '<i class="fa fa-check text-primary mr-3"></i>' . $item;
                            echo '</li>';
                        }
                        echo '</ul></div>'; // Close the last column
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- About End -->
    
    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Classes</span>
                </p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Drawing Class</h4>
                            <p class="card-text">
                                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age of Kids</strong>
                                </div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-2.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Language Learning</h4>
                            <p class="card-text">
                                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age of Kids</strong>
                                </div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Basic Science</h4>
                            <p class="card-text">
                                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age of Kids</strong>
                                </div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <div
                            class="position-relative overflow-hidden mb-4"
                            style="border-radius: 100%"
                    >
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                        <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                        >
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-twitter"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-linkedin-in"></i
                                ></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div
                            class="position-relative overflow-hidden mb-4"
                            style="border-radius: 100%"
                    >
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                        <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                        >
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-twitter"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-linkedin-in"></i
                                ></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div
                            class="position-relative overflow-hidden mb-4"
                            style="border-radius: 100%"
                    >
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                        <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                        >
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-twitter"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-linkedin-in"></i
                                ></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div
                            class="position-relative overflow-hidden mb-4"
                            style="border-radius: 100%"
                    >
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
                        <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                        >
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-twitter"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center mr-2 px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                            <a
                                    class="btn btn-outline-light text-center px-0"
                                    style="width: 38px; height: 38px"
                                    href="#"
                            ><i class="fab fa-linkedin-in"></i
                                ></a>
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
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                                >
                            </div>
                            <p>
                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                lorem. Tempor ipsum justo amet stet...
                            </p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                                >
                            </div>
                            <p>
                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                lorem. Tempor ipsum justo amet stet...
                            </p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"
                                ><i class="fa fa-user text-primary"></i> Admin</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-folder text-primary"></i> Web Design</small
                                >
                                <small class="mr-3"
                                ><i class="fa fa-comments text-primary"></i> 15</small
                                >
                            </div>
                            <p>
                                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                lorem. Tempor ipsum justo amet stet...
                            </p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a
                        href=""
                        class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                        style="font-size: 40px; line-height: 40px"
                >
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">KidKinder</span>
                </a>
                <p>
                    Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
                    dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
                    stet diam duo eos rebum ipsum diam ipsum elitr.
                </p>
                <div class="d-flex justify-content-start mt-4">
                    <a
                            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px"
                            href="#"
                    ><i class="fab fa-twitter"></i
                        ></a>
                    <a
                            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px"
                            href="#"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                    <a
                            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px"
                            href="#"
                    ><i class="fab fa-linkedin-in"></i
                        ></a>
                    <a
                            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px"
                            href="#"
                    ><i class="fab fa-instagram"></i
                        ></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Home</a
                    >
                    <a class="text-white mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>About Us</a
                    >
                    <a class="text-white mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Our Classes</a
                    >
                    <a class="text-white mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Our Teachers</a
                    >
                    <a class="text-white mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Our Blog</a
                    >
                    <a class="text-white" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                    >
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <form action="">
                    <div class="form-group">
                        <input
                                type="text"
                                class="form-control border-0 py-4"
                                placeholder="Your Name"
                                required="required"
                        />
                    </div>
                    <div class="form-group">
                        <input
                                type="email"
                                class="form-control border-0 py-4"
                                placeholder="Your Email"
                                required="required"
                        />
                    </div>
                    <div>
                        <button
                                class="btn btn-primary btn-block border-0 py-3"
                                type="submit"
                        >
                            Submit Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div
                class="container-fluid pt-5"
                style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
        >
            <p class="m-0 text-center text-white">
                &copy;
                <a class="text-primary font-weight-bold" href="#">Your Site Name</a>.
                All Rights Reserved.
                
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed by
                <a class="text-primary font-weight-bold" href="https://htmlcodex.com"
                >HTML Codex</a
                >
                <br />Distributed By:
                <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </p>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/')}}lib/easing/easing.min.js"></script>
    <script src="{{asset('frontend/')}}lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/')}}lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontend/')}}lib/lightbox/js/lightbox.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="{{asset('frontend/')}}mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('frontend/')}}mail/contact.js"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset('frontend/')}}js/main.js"></script>
    </body>
</html>
