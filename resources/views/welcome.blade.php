@extends('layouts.app')

@section('main_section')
    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="img/slider-1.jpg" alt="" title="#slider-caption-1" />
                <img src="img/slider-2.jpg" alt="" title="#slider-caption-2" />
                <img src="img/slider-3.jpg" alt="" title="#slider-caption-3" />
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                    With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                    Together we <br>can make a Difference</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                    With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a
                                    little. Change a lot.</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                    With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->
        </div>
    </section><!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Make Donetion</h3>
                            <p>Help today because tomorrow you may be the one who needs helping!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-2.png" alt="prmo icon">
                            <h3>Fundrising</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-3.png" alt="prmo icon">
                            <h3>Become A Volunteer</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->

    <!--
                                                                                                                                                                            <section class="causes-section bg-grey bd-bottom padding">
                                                                                                                                                                                <div class="container">
                                                                                                                                                                                    <div class="section-heading text-center mb-40">
                                                                                                                                                                                        <h2>Recent Causes</h2>
                                                                                                                                                                                        <span class="heading-border"></span>
                                                                                                                                                                                        <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="causes-wrap row">
                                                                                                                                                                                        <div class="col-md-4 xs-padding">
                                                                                                                                                                                            <div class="causes-content">
                                                                                                                                                                                                <div class="causes-thumb">
                                                                                                                                                                                                    <img src="img/causes-1.jpg" alt="causes">
                                                                                                                                                                                                    <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                                                                                                                                                                                            aria-valuemin="0" aria-valuemax="100"><span
                                                                                                                                                                                                                class="wow cssanimation fadeInLeft">25%</span></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="causes-details">
                                                                                                                                                                                                    <h3>First charity activity of this summer.</h3>
                                                                                                                                                                                                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                                                                                                                                                                                    <div class="donation-box">
                                                                                                                                                                                                        <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                                                                                                                                                                                        <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <a href="#" class="read-more">Read More</a>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-md-4 xs-padding">
                                                                                                                                                                                            <div class="causes-content">
                                                                                                                                                                                                <div class="causes-thumb">
                                                                                                                                                                                                    <img src="img/causes-2.jpg" alt="causes">
                                                                                                                                                                                                    <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25"
                                                                                                                                                                                                            aria-valuemin="0" aria-valuemax="100"><span
                                                                                                                                                                                                                class="wow cssanimation fadeInLeft">45%</span></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="causes-details">
                                                                                                                                                                                                    <h3>Big charity: build school for poor children.</h3>
                                                                                                                                                                                                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                                                                                                                                                                                    <div class="donation-box">
                                                                                                                                                                                                        <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                                                                                                                                                                                        <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <a href="#" class="read-more">Read More</a>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-md-4 xs-padding">
                                                                                                                                                                                            <div class="causes-content">
                                                                                                                                                                                                <div class="causes-thumb">
                                                                                                                                                                                                    <img src="img/causes-3.jpg" alt="causes">
                                                                                                                                                                                                    <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                                                                                                                                                                                            aria-valuemin="0" aria-valuemax="100"><span
                                                                                                                                                                                                                class="wow cssanimation fadeInLeft">75%</span></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="causes-details">
                                                                                                                                                                                                    <h3>Building clean-water system for rural poor.</h3>
                                                                                                                                                                                                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                                                                                                                                                                                    <div class="donation-box">
                                                                                                                                                                                                        <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                                                                                                                                                                                        <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <a href="#" class="read-more">Read More</a>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </section> -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="img/profile.jpg" alt="profile">
                        <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor, the abused and the helpless.</p>
                        <img src="img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="img/history.jpg" alt="about-thumb">
                            <h3>Our History</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make in the lives of the poor.</p>
                            <a href="{{ route('page.history') }}" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="img/mission.jpg" alt="about-thumb">
                            <h3>Our Bhawans</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make in the lives of the poor.</p>
                            <a href="{{ route('page.bhawan') }}" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->



    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">

                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="img/home-blog-1.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> POST | Name </span>
                                    <h3><a href="#">Volunteer Name</a></h3>
                                    <h3><a href="#">+91 123 456 789 </a></h3>
                                    <h3><a href="#">admin@gmail.com </a></h3>
                                    <p>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>

                                    </p>

                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="img/home-blog-1.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> POST | Name </span>
                                    <h3><a href="#">Volunteer Name</a></h3>
                                    <h3><a href="#">+91 123 456 789 </a></h3>
                                    <h3><a href="#">admin@gmail.com </a></h3>
                                    <p>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>

                                    </p>

                                </div>
                            </div>
                        </div><!-- Post 2 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="img/home-blog-1.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> POST | Name </span>
                                    <h3><a href="#">Volunteer Name</a></h3>
                                    <h3><a href="#">+91 123 456 789 </a></h3>
                                    <h3><a href="#">admin@gmail.com </a></h3>
                                    <p>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>

                                    </p>

                                </div>
                            </div>
                        </div><!-- Post 3 -->

                    </div>

                </div><!-- Blog Posts -->

            </div>
            <div class="col-lg-12 text-center">
                <A href="{{ route('page.volunteers-details') }}"><button class="default-btn">Show All</button></A>
            </div>
        </div>








        </div>
    </section><!-- /Team Section -->



    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Events</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div id="event-carousel" class="events-wrap owl-Carousel">
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-1.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Let's talk about the poor children.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="{{ route('page.events-details') }}" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-1 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-2.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Insure clean water to everyone in Africa.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="{{ route('page.events-details') }}" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-2 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-3.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Nepal Earthquake Clean Water Initiative.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="{{ route('page.events-details') }}" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-3 -->
            </div>
        </div>
    </section><!-- Events Section -->
    <!--
                                                                                                                                                        <section class="testimonial-section bd-bottom padding">
                                                                                                                                                            <div class="container">
                                                                                                                                                                <div class="section-heading text-center mb-40">
                                                                                                                                                                    <h2>What People Say</h2>
                                                                                                                                                                    <span class="heading-border"></span>
                                                                                                                                                                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                                                                                                                                                                </div>
                                                                                                                                                    <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                                                                                                                                                        <div class="testimonial-item">
                                                                                                                                                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                                                                                                                                                                in the lives of the poor, the abused and the helpless.</p>
                                                                                                                                                            <div class="testi-footer">
                                                                                                                                                                <img src="img/team-1.jpg" alt="profile">
                                                                                                                                                                <h4>Jonathan Smith <span>Marketer</span></h4>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="testimonial-item">
                                                                                                                                                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                                                                                                                                                                in the lives of the poor, the abused and the helpless.</p>
                                                                                                                                                            <div class="testi-footer">
                                                                                                                                                                <img src="img/team-2.jpg" alt="profile">
                                                                                                                                                                <h4>Angelina Rose <span>Designer</span></h4>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="testimonial-item">
                                                                                                                                                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                                                                                                                                                                in the lives of the poor, the abused and the helpless.</p>
                                                                                                                                                            <div class="testi-footer">
                                                                                                                                                                <img src="img/team-3.jpg" alt="profile">
                                                                                                                                                                <h4>Taylor Swift <span>Developer</span></h4>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="testimonial-item">
                                                                                                                                                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                                                                                                                                                                in the lives of the poor, the abused and the helpless.</p>
                                                                                                                                                            <div class="testi-footer">
                                                                                                                                                                <img src="img/team-4.jpg" alt="profile">
                                                                                                                                                                <h4>Michel Brown <span>Programer</span></h4>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    </div>
                                                                                                                                                    </section> -->



    <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-6.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-7.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-8.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./Sponsor Section -->
@endsection
