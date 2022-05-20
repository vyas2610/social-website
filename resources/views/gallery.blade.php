@extends('layouts.app')
@section('site_title', 'Gallery')
@section('main_section')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Image Gallery</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                <ul class="gallery-filter align-center mb-30">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".wordpress">Wordpress</li>
                    <li data-filter=".marketing">Marketing</li>
                </ul><!-- /.gallery filter -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-4 col-sm-6 single-item branding design">
                    <div class="gallery-wrap">
                        <img src="img/gallery-1.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-1.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-1 -->
                <div class="col-lg-4 col-sm-6 single-item marketing wordpress">
                    <div class="gallery-wrap">
                        <img src="img/gallery-2.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-2.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-2 -->
                <div class="col-lg-4 col-sm-6 single-item wordpress design branding">
                    <div class="gallery-wrap">
                        <img src="img/gallery-3.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-3.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-3 -->
                <div class="col-lg-4 col-sm-6 single-item design branding wordpress">
                    <div class="gallery-wrap">
                        <img src="img/gallery-4.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-4.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-4 -->
                <div class="col-lg-4 col-sm-6 single-item branding marketing">
                    <div class="gallery-wrap">
                        <img src="img/gallery-5.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-5.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-5 -->
                <div class="col-lg-4 col-sm-6 single-item marketing design">
                    <div class="gallery-wrap">
                        <img src="img/gallery-6.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-6.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-6 -->
            </div>
        </div>
    </section><!-- /Gallery Section -->

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

    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="img/logo-light.png" alt="logo">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                            in the lives of the poor</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Recent Campaigns</h3>
                        <ul class="widget-link">
                            <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                            <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                            <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                            <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Charitify Location</h3>
                        <ul class="address">
                            <li><i class="ti-email"></i> Info@YourDomain.com</li>
                            <li><i class="ti-mobile"></i> +(333) 052 39876</li>
                            <li><i class="ti-world"></i> Www.YourWebsite.com</li>
                            <li><i class="ti-location-pin"></i> 60 Grand Avenue. Central New Road 0708, USA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./Widget Section -->
@endsection
