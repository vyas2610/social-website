@extends('layouts.app')

@section('site_title', 'FAQs')


@section('main_section')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>FAQs </h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">FAQs</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">

            <div class="team-wrapper row">
                <div class="col-lg-12 sm-padding">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default,
                                    thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    And lastly, the placeholder content for the third and final accordion panel. This panel
                                    is hidden by default.
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #4
                                    </button>
                                </h2>
                            </div>

                            <div id="collapsefour" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default,
                                    thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 sm-padding">
                                    <div class="accordion" id="accordionExample1">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Some placeholder content for the first accordion panel. This panel is shown by default,
                                                    thanks to the <code>.show</code> class.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                                    default.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    And lastly, the placeholder content for the third and final accordion panel. This panel
                                                    is hidden by default.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 
                 
                            </div> -->
            </div>
    </section><!-- /Team Section -->
@endsection
