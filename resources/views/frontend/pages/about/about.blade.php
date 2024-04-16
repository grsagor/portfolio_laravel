@extends('frontend.include.layout')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>About</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <h3>About Us: Crafting Experiences, Inspiring Innovations</h3>
                            <p>We are dedicated to crafting immersive experiences that resonate with our audience, igniting
                                their passion for innovation. With a diverse team of experts, we push boundaries, embracing
                                creativity to deliver solutions that leave a lasting impact on the world.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Passionate team of innovators crafting immersive
                                    experiences.</li>
                                <li><i class="bi bi-check-circle-fill"></i>Boundary-pushing creativity driving impactful
                                    solutions.</li>
                                <li><i class="bi bi-check-circle-fill"></i>Diverse expertise dedicated to inspiring
                                    innovation.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Why Choose Us</h2>

                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
                    <div class="col-xl-7 slides  position-relative">

                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Proficiency in Modern Technologies and Innovative Solutions</h3>
                                        <h4 class="mb-3">We excel in utilizing cutting-edge tools and technologies to
                                            craft innovative solutions.</h4>
                                        <p>Our team is highly proficient in leveraging the latest advancements in technology
                                            to create tailor-made solutions that address your unique challenges and goals.
                                            We stay ahead of the curve, constantly learning and adapting to new technologies
                                            to ensure that our solutions are always at the forefront of innovation.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Consistent and Dependable Services with a Proven Track Record
                                        </h3>
                                        <h4 class="mb-3">Our reliable services ensure consistent quality and success for
                                            your projects.</h4>
                                        <p>With a proven track record of successful project delivery, we provide dependable
                                            services that you can rely on for the success of your initiatives. Our
                                            commitment to consistency and quality means that you can trust us to deliver
                                            results that meet or exceed your expectations, every time.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Collaborative Approach to Achieve Optimal Outcomes</h3>
                                        <h4 class="mb-3">We prioritize teamwork-driven collaboration to achieve remarkable
                                            results.</h4>
                                        <p>Collaboration is at the heart of what we do. We believe that by working closely
                                            with our clients, we can better understand their needs and goals, leading to
                                            more effective solutions and better outcomes. We foster an environment of open
                                            communication and shared objectives, ensuring that everyone is aligned and
                                            working towards the same goals.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Client-Centric Philosophy and Personalized Solutions</h3>
                                        <h4 class="mb-3">We put our clients first, delivering personalized solutions
                                            tailored to their needs.</h4>
                                        <p>Your satisfaction is our top priority. We take the time to listen and understand
                                            your unique needs and preferences, crafting customized solutions that are
                                            designed to meet your specific requirements. Our client-centric approach ensures
                                            that you receive solutions that are not only effective but also aligned with
                                            your vision and objectives.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Choose Us Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Let's Connect Today</h3>
                        <p>Reach out to discuss collaborations, project inquiries, or any questions you may have. I'm eager
                            to hear from you!</p>
                        <a class="cta-btn" href="{{ route('frontend.contact') }}">Contact Us</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section> --}}
        <!-- End Team Section -->

    </main>
@endsection
