@extends('admin\layouts.app')
@section('site-title', 'Edit Slider')
@section('main-content-admin')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                {{ Form::open(['url' => route('admin.slider.update', $slider->id), 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) }}
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Slider</h4>
                            </div>

                            @include('admin.slider._form')

                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Update</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
        </section>
    </div>
@endsection
