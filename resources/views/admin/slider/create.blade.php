@extends('admin\layouts.app')
@section('site-title', 'Add Slider')
@section('main-content-admin')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                {{ Form::open(['url' => route('admin.slider.store'), 'class' => 'needs-validation', 'novalidate']) }}
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Slider</h4>
                            </div>

                            @include('admin.slider._form')

                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
        </section>
    </div>
@endsection
