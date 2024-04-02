<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input type="text" name="Nombres" class="form-control @error('Nombres') is-invalid @enderror" value="{{ old('Nombres', $estudiante?->Nombres) }}" id="nombres" placeholder="Nombres">
            {!! $errors->first('Nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="Apellidos" class="form-control @error('Apellidos') is-invalid @enderror" value="{{ old('Apellidos', $estudiante?->Apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('Apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="asignatura" class="form-label">{{ __('Asignatura') }}</label>
            <input type="text" name="Asignatura" class="form-control @error('Asignatura') is-invalid @enderror" value="{{ old('Asignatura', $estudiante?->Asignatura) }}" id="asignatura" placeholder="Asignatura">
            {!! $errors->first('Asignatura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nota" class="form-label">{{ __('Nota') }}</label>
            <input type="text" name="Nota" class="form-control @error('Nota') is-invalid @enderror" value="{{ old('Nota', $estudiante?->Nota) }}" id="nota" placeholder="Nota">
            {!! $errors->first('Nota', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>