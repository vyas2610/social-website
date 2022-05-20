@extends('layouts.app')
@section('site_title', 'Event-Details')

@section('main_section')
    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Event Name</h2>
                <span class="heading-border"></span>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">


                        <div class="col-md-6">

                            <img src="img/team-3.jpg" alt="team">


                        </div><!-- /Team-3 -->

                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-content">

                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                            in the lives of the poor, the abused and the helpless.</p>

                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                            <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>No goal requirements.</li>
                            <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->
@endsection
