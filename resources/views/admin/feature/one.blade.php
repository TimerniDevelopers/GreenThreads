@extends('admin.layouts.master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Feature One - Items') }}</h1>
    </div>


    <div class="row">
        <div class="col-md-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin_feature_one_item_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Text') }}</label>
                            <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $feature_one_items->text }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Existing Photo') }}</label>
                                    <div class="photo-container">
                                        <a href="{{ asset('uploads/' . $feature_one_items->photo) }}" class="magnific"><img
                                                src="{{ asset('uploads/' . $feature_one_items->photo) }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('Change Photo') }}</label>
                                    <div><input type="file" name="photo"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4><b>{{ __('Elements') }}</b></h4>
                    <div class="mb_10">
                        <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fas fa-plus"></i>
                            {{ __('Add Item') }}</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Add Element') }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin_feature_one_item_element_submit') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{ __('Heading') }}*</label>
                                            <input type="text" name="heading" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{ __('Text') }}*</label>
                                            <textarea name="text" class="form-control h_70" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{ __('Icon') }}</label>
                                            <select id="iconSelect" name="icon" class="form-select">
                                                <option value="">{{ __('Select Icon') }}</option>
                                                @foreach ($icons as $icon)
                                                    <option value="{{ $icon->icon_code }}">{{ $icon->icon_code }}</option>
                                                @endforeach
                                            </select>
                                            <div id="iconPreview"></i></div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="coustomize_icon" class="form-label">Customize Icon</label>
                                            <input type="file" id="coustomize_icon" name="coustomize_icon"
                                                class="form-control" accept="image/*">
                                            <div id="coustomizeIconPreview"></div>
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

                                        <div class="mb-3">
                                            <button type="submit"
                                                class="btn btn-primary btn-sm">{{ __('Submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Modal -->


                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>{{ __('Icon') }}</th>
                                    <th>{{ __('Heading') }}</th>
                                    <th>{{ __('Text') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feature_one_item_elements as $item)
                                    <tr>
                                        <td>
                                            @if ($item->coustomize_icon)
                                                <img src="{{ asset('uploads/' . $item->coustomize_icon) }}" alt="">
                                            @else
                                                <i class="{{ $item->icon }} fz_40"></i>
                                            @endif
                                        </td>
                                        <td>{{ $item->heading }}</td>
                                        <td>{{ $item->text }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm btn-block"
                                                data-bs-toggle="modal"
                                                data-bs-target="#edit_modal_{{ $loop->iteration }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin_feature_one_item_element_delete', $item->id) }}"
                                                class="btn btn-danger btn-sm btn-block"
                                                onClick="return confirm('{{ __('Are you sure?') }}')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_modal_{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        {{ __('Edit Element') }}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('admin_feature_one_item_element_update', $item->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for=""
                                                                class="form-label">{{ __('Heading') }}*</label>
                                                            <input type="text" name="heading" class="form-control"
                                                                value="{{ $item->heading }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for=""
                                                                class="form-label">{{ __('Text') }}*</label>
                                                            <textarea name="text" class="form-control h_70" cols="30" rows="10">{{ $item->text }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for=""
                                                                class="form-label">{{ __('Icon') }}*</label>
                                                            <select id="iconSelectEdit" name="icon"
                                                                class="form-select">
                                                                @foreach ($icons as $icon)
                                                                    <option value="{{ $icon->icon_code }}"
                                                                        @if ($icon->icon_code == $item->icon) selected @endif>
                                                                        {{ $icon->icon_code }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div id="iconPreviewEdit"><i
                                                                    class="icon {{ $item->icon }}"></i></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="coustomize_icon1" class="form-label">Customize
                                                                Icon</label>
                                                            <input type="file" id="coustomize_icon1"
                                                                name="coustomize_icon" class="form-control"
                                                                accept="image/*" onchange="iconImageChange(this)">
                                                            <div id="coustomizeIconPreviewUpdate">

                                                            </div>
                                                        </div>



                                                        <script>
                                                            function iconImageChange(input) {
                                                                var previewDiv1 = document.getElementById('coustomizeIconPreviewUpdate');

                                                                // Ensure previewDiv1 exists in the DOM
                                                                if (!previewDiv1) {
                                                                    console.error('Preview div not found!');
                                                                    return;
                                                                }

                                                                // Clear previous preview
                                                                previewDiv1.innerHTML = '';

                                                                // Check if the user selected a file
                                                                if (input.files && input.files[0]) {
                                                                    var reader1 = new FileReader();

                                                                    // Once the file is loaded, create an image element and set the source to the file's data URL
                                                                    reader1.onload = function(e) {
                                                                        // Use console.log to debug
                                                                        console.log("File successfully read, showing preview.");

                                                                        var imgHTML = `<img src="${e.target.result}" style="max-width: 100px; max-height: 100px;">`;
                                                                        previewDiv1.innerHTML = imgHTML; // Insert image HTML into the preview div
                                                                        console.log(previewDiv1);
                                                                    };

                                                                    // Handle errors while reading the file
                                                                    reader1.onerror = function(error) {
                                                                        console.error("Error reading file:", error);
                                                                    };

                                                                    // Read the image file as a data URL
                                                                    reader1.readAsDataURL(input.files[0]);
                                                                } else {
                                                                    console.error('No file selected or file is invalid.');
                                                                }
                                                            }
                                                        </script>
                                                        <div class="mb-3">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">{{ __('Update') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // Modal -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.getElementById('iconSelect').addEventListener('change', function() {
                var selectedValue = this.value;
                var previewElement = document.getElementById('iconPreview');
                previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
            });
            document.getElementById('iconSelectEdit').addEventListener('change', function() {
                var selectedValueEdit = this.value;
                var previewElementEdit = document.getElementById('iconPreviewEdit');
                previewElementEdit.innerHTML = '<i class="icon ' + selectedValueEdit + '"></i>';
            });
        };
    </script>
@endsection
