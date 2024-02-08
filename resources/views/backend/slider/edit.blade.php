@extends('backend.layouts.app') @section('admin')
<form
    action="{{ route('admin.slider.update',$slider->id) }}"
    method="post"
    enctype="multipart/form-data"
>
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label"
                                >Title <span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="title"
                                value="{{ old('title',$slider->title) }}"
                            />
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea
                                name="description"
                                id=""
                                cols="30"
                                rows="3"
                                class="form-control"
                                >{{ old('description',$slider->description) }}</textarea
                            >
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Text Position</label>
                                <select
                                    name="position"
                                    id="position"
                                    class="form-control"
                                >
                                    <option value="left-top" {{ $slider->
                                        position == 'left-top' ? 'selected' : ''
                                        }}>Left & Top
                                    </option>
                                    <option value="right-top" {{ $slider->
                                        position == 'right-top' ? 'selected' :
                                        '' }}>Right & Top
                                    </option>
                                    <option value="right-middle" {{ $slider->
                                        position == 'right-middle' ? 'selected'
                                        : '' }}>Right & Middle
                                    </option>
                                    <option value="right-bottom" {{ $slider->
                                        position == 'right-bottom' ? 'selected'
                                        : '' }}>Right & Bottom
                                    </option>
                                    <option value="left-bottom" {{ $slider->
                                        position == 'left-bottom' ? 'selected' :
                                        '' }}>Left & Bottom
                                    </option>
                                    <option value="left-middle" {{ $slider->
                                        position == 'left-middle' ? 'selected' :
                                        '' }}>Left & Middle
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Button Text</label>
                                <input
                                    type="text"
                                    name="button_text"
                                    id=""
                                    class="form-control"
                                    value="{{ old('button_text',$slider->button_text) }}"
                                />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Button Url</label>
                            <input
                                type="text"
                                name="button_url"
                                id=""
                                class="form-control"
                                value="{{ old('button_url',$slider->button_url) }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">
                    <h4>Add Feature Image</h4>
                </div>
                <div class="card-body">
                    <input
                        class="form-control form-control-sm"
                        id="formFileSm"
                        type="file"
                        name="feature_image"
                    />
                    @error('feature_image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Publish</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach(app('categories') as $category)
                            <option value="{{ $category->id }}" @if($slider->category_id ==
                                $category->id) selected @endif>{{ $category->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $slider->
                                status == 1 ? 'selected' :
                                '' }}>Active</option>
                            <option value="2" {{ $slider->
                                status == 2 ? 'selected' :
                                '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-end">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
