<!DOCTYPE html>
<html lang="en">

{{-- header --}}
@include('inc.header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('inc.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('inc.nav')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

            <img class="img-fluid" src="img/crash-1308575_1920.jpg" alt="Image" style="height:700px width:100%">

            <div class="carousel-caption">
                <div class="container">
                    <div class="row cover-text">
                        <div class="col-12 col-lg-11">
                            <h1 class="animated slideInDown text-center  " style="fontSize:50px">
                                Insurance <br /> can generate wealth for all individuals
                            </h1>
                            <p class="fs-5  mb-5">
                                At Samnel Insurance Brokers LTD, we understand that protecting the things that matter
                                most to you is a top priority.
                            </p>

                            <Link to="/about" class="btn bg-secondary  py-3 px-5">More About Us </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    @include('user.homeabout')
    <!-- About End -->

    <!-- insurance Start -->
    <?php
    $data = config('data');
    // this will print the type of $datas variable
    ?>

    <div class="container-xxl py-5 background-color">
        <div class="container">
            <div class="text-center mx-auto profession-div">
                <h1 class="display-6 mb-5">Insurance</h1>
            </div>
            <div class="row g-4">
                @foreach ($data as $data)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid-" src="{{ $data['image'] }}" alt="img"
                                style="height:200px; width:260px" />
                            <div class="text-center p-4">
                                <h5>{{ $data['name'] }}</h5>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-primary px-4 py-2 me-3">Get Quote</a>
                                    <a href="#" class="btn btn-outline-primary px-4 py-2">Learn More</a>
                                </div>
                                <hr>
                                <div>
                                    <p>{{ $data['note1'] }}</p>
                                </div>
                                <hr>
                                <div>
                                    <p>{{ $data['info1'] }}</p>
                                    <p>{{ $data['info2'] }}</p>
                                    <p>{{ $data['info3'] }}</p>
                                    <p>{{ $data['info4'] }}</p>
                                    <p>{{ $data['info5'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- insurance End -->

    {{-- progress --}}
    <div>
        <div class="container-fluid page-header-view-cong py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-4 animated text-center  slideInDown mb-4"> </h1>
            </div>
        </div>
        <div class="section background-color ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 blog-content pe-5">
                        <p class="lead">
                            It is with great pleasure that we celebrate 30 years of
                            excellence and success at Samnel Insurance Brokers LTD , a
                            leading insurance broker company. We are thrilled to have had
                            the opportunity to serve you for three decades, and we look
                            forward to continuing to provide you with outstanding insurance
                            services for many years to come.
                        </p>
                        <img src="img/samnelat30 (2).jpeg" class="img-fluid mb-4 w-70 rounded" alt="" />

                        <p>
                            We take pride in our commitment to delivering personalized and
                            innovative insurance solutions that meet the unique needs of our
                            clients. Our team of highly skilled and experienced
                            professionals has worked tirelessly to build a reputation for
                            exceptional customer service and quality insurance products.
                        </p>
                    </div>
                    <div class="col-md-4 sidebar">
                        <div class="sidebar-box"></div>

                        <div class="sidebar-box">
                            <img src="img/samnelat30Logo-removebg-preview.png" alt=""
                                class="img-fluid mb-4 w-70 rounded" />
                            <h3 class="text-black">More</h3>
                            <p>
                                Over the past 30 years, we have seen tremendous growth and
                                success, and we are grateful for the trust and loyalty our
                                clients have shown us. We would like to take this opportunity
                                to thank you for your continued support, and we look forward
                                to serving you for many more years to come.
                            </p>
                        </div>

                        <div class="sidebar-box"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </div>

    {{-- progress end  --}}

    <!-- Facts Start -->
    @include('user.facts')
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Few Reasons Why People Choose Us!</h1>
                    <p class="mb-4">
                        People choose us for their insurance needs because of our commitment to providing exceptional
                        coverage, service, and value. We strive to build long-term relationships with our customers by
                        delivering reliable, affordable, and personalized insurance solutions.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-06-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Easy Process</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-03-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Fast Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-04-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Policy Controlling</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-07-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Money Saving</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100 feature-style">
                        <img class="position-absolute w-100 h-100 image-feature" src="img/accounting-761599_1920.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    {{-- partners --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto profession-div">
                <h1 class="display-6 mb-5"> Partners </h1>
                <hr />
            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div
                            style="
                        justifyContent:center,
                        display: flex,
                        alignItems: center,
                        ">
                            <img class="" src="" alt="" style="height:200px  width:260px " />
                        </div>

                        <div class="team-text text-center bg-white p-4">
                            <h5></h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href="https://www.test">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="btn btn-square btn-light m-1" href="mailto:test">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a class="btn btn-square btn-light m-1"
                                    href="https://www.google.com/maps/search/tesrt">
                                    <i class="fa fa-location-arrow"></i>
                                </a>
                                <a class="btn btn-square btn-light m-1" href="tel:2222">
                                    <i class="fa fa-mobile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    {{-- partners end --}}


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto profession-div">
                <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="" src="" alt="" style="height: 200px, width: 260px" />
                        <div class="text-center p-4">
                            <h5>name</h5>

                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client </h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client </h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client </h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    <!-- Footer Start -->
    @include('inc.footer')
    <!-- Footer End -->
</body>

</html>
