@extends('layouts.admin')
@section('content')

<form method="POST" action="{{ route("admin.buildings.store") }}" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.building.title_singular') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.building.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.building.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="description">{{ trans('cruds.building.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.building.fields.description_helper') }}</span>
            </div>

            <div class="form-group">
              <div>
                <input type="checkbox" value="{{ old('camera', '') }}" id="camera" name="camera">
                <label for="name">{{ trans('cruds.building.fields.camera') }}</label>
              </div>
              <span class="help-block">{{ trans('cruds.building.fields.camera_helper') }}</span>
            </div>

            <div class="form-group">
              <div>
                <input type="checkbox" value="{{ old('badge', '') }}" id="badge" name="badge">
                <label for="name">{{ trans('cruds.building.fields.badge') }}</label>
              </div>
              <span class="help-block">{{ trans('cruds.building.fields.badge_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="site_id">{{ trans('cruds.building.fields.site') }}</label>
                <select class="form-control select2 {{ $errors->has('site') ? 'is-invalid' : '' }}" name="site_id" id="site_id">
                    @foreach($sites as $id => $site)
                        <option value="{{ $id }}" {{ old('site_id') == $id ? 'selected' : '' }}>{{ $site }}</option>
                    @endforeach
                </select>
                @if($errors->has('site'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.building.fields.site_helper') }}</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-danger" type="submit">
            {{ trans('global.save') }}
        </button>
    </div>
</form>
@endsection

@section('scripts')
<script>
$(document).ready(function () {

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: []
      }
    );
  }

  $(".select2-free").select2({
        placeholder: "{{ trans('global.pleaseSelect') }}",
        allowClear: true,
        tags: true
    })

});
</script>
@endsection
