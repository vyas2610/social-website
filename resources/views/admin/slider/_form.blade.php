<div class="card-body">
    <div class="mb-3">
        {{ Form::label('title') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="mb-3">
        {{ Form::label('tagline') }}
        {{ Form::text('tagline', null, ['class' => 'form-control', 'placeholder' => 'Tagline', 'required' => 'required']) }}
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="mb-3">
        {{ Form::label('description') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 15, 'required' => 'required']) }}
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
</div>
