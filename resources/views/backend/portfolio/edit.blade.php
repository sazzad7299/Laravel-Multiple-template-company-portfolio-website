@extends('backend.layouts.app') @section('admin')
<form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title',$portfolio->title) }}" />
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Location :<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="description" value="{{ old('description',$portfolio->description) }}">
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Feature Image</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="feature_image">
                            @error('feature_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <img src="{{ asset($portfolio->feature_image)  }}" alt="" width="100" style="border:2px solid #ccc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">
                    <h4>Publish</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $portfolio->
                                status == 1 ? 'selected' :
                                '' }}>Active</option>
                            <option value="2" {{ $portfolio->
                                status == 2 ? 'selected' :
                                '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach(app('categories') as $category)
                            <option value="{{ $category->id }}" @if($portfolio->category_id ==
                                $category->id) selected @endif>{{ $category->title }}
                            </option>
                            @endforeach
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
