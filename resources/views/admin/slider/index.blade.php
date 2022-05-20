@extends('admin\layouts.app')
@section('site-title', 'Slider')
@section('main-content-admin')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Slider | Index </h4>
                            </div>

                            <div class="card-body">
                                @if (!$sliders->isEmpty())
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Tagline</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sliders as $index => $s)
                                                <tr>
                                                    <th scope="row">{{ $index + $sliders->firstItem() }}</th>
                                                    <td>{{ $s->title }}</td>
                                                    <td>{{ $s->tagline }}</td>
                                                    <td><img src="../abc.jpg"></td>
                                                    <td>{{ date('F d, Y', strtotime($s->created_at)) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.slider.edit', $s->id) }}">
                                                            <i class="fas fa-pen text-info" aria-hidden="true"
                                                                style=" font-size:20px;"></i></a> &nbsp;
                                                        &nbsp;
                                                        {{ Form::open(['url' => route('admin.slider.destroy', $s->id), 'method' => 'DELETE']) }}
                                                        <button type="submit">
                                                            <i class="fas fa-trash text-danger" aria-hidden="true"
                                                                style="font-size:20px;"></i> </button>
                                                        {{ Form::close() }}
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $sliders->links() }}
                                @else
                                    <div>
                                        No record(s) found.
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
