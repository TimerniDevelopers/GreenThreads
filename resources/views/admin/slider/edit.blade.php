@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Slider') }}</h1>
    <a href="{{ route('admin_slider_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i> {{ __('All Items') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin_slider_update',$slider->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Existing Photo') }}</label>
                        <div><img src="{{ asset('uploads/'.$slider->photo) }}" alt="" class="w_200"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Change Photo') }}</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Text') }}</label>
                        <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $slider->text }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Button Text') }}</label>
                        <input type="text" name="button_text" class="form-control" value="{{ $slider->button_text }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Button URL') }}</label>
                        <input type="text" name="button_url" class="form-control" value="{{ $slider->button_url }}">
                    </div>
                    <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Update') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection