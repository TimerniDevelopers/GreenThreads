@extends('admin.layouts.master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Create Service') }}</h1>
        <a href="{{ route('admin_service_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fas fa-bars"></i> {{ __('All Items') }}
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin_service_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Name') }} *</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Slug') }}*</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">{{ __('Short Description') }} *</label>
                    <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ old('short_description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">{{ __('Description') }} *</label>
                    <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Icon') }}*</label>
                            <select id="iconSelect" name="icon" class="form-select">
                                <option value="">{{ __('Select Icon') }}</option>
                                @foreach ($icons as $icon)
                                    <option value="{{ $icon->icon_code }}">{{ $icon->icon_code }}</option>
                                @endforeach
                            </select>
                            <div id="iconPreview"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="coustomize_icon" class="form-label">Customize Icon*</label>
                            <input type="file" id="coustomize_icon" name="coustomize_icon" class="form-control"
                                accept="image/*">
                            <div id="coustomizeIconPreview"></div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('coustomize_icon').addEventListener('change', function(event) {
                            var fileInput = event.target;
                            var previewDiv = document.getElementById('coustomizeIconPreview');

                            // Clear previous preview
                            previewDiv.innerHTML = '';

                            // Check if the user selected a file
                            if (fileInput.files && fileInput.files[0]) {
                                var reader = new FileReader();

                                // Once the file is loaded, create an image element and set the source to the file's data URL
                                reader.onload = function(e) {
                                    var img = document.createElement('img');
                                    img.src = e.target.result;
                                    img.style.maxWidth = '100px'; // Set image size
                                    img.style.maxHeight = '100px'; // Set image size
                                    previewDiv.appendChild(img);
                                };

                                // Read the image file as a data URL
                                reader.readAsDataURL(fileInput.files[0]);
                            }
                        });
                    </script>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Phone') }}</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">{{ __('SEO Title') }}</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Photo') }} *</label>
                            <div><input type="file" name="photo"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Banner') }}</label>
                            <div><input type="file" name="banner"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('PDF') }}</label>
                            <div><input type="file" name="pdf"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById('iconSelect').addEventListener('change', function() {
                var selectedValue = this.value;
                var previewElement = document.getElementById('iconPreview');
                previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
            });
        };
    </script>
@endsection
