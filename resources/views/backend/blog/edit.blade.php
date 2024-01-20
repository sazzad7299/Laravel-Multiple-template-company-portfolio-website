@extends('backend.layouts.app') @section('admin')
<form
    action="{{ route('admin.blog.update', $blog->id) }}"
    method="post"
    enctype="multipart/form-data">
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
                                value="{{ old('title',$blog->title) }}"
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
                                >{{ old('description',$blog->description) }}</textarea
                            >
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
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $blog->
                                status == 1 ? 'selected' :
                                '' }}>Active</option>
                            <option value="2" {{ $blog->
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
