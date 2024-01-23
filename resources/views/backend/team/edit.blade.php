@extends('backend.layouts.app') @section('admin')
<form action="{{ route('admin.team.update', $team->id) }}" method="post" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title',$team->title) }}" />
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description',$team->description) }}">
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea name="details" id="" rows="2" class="form-control">{{ old('details',$team->details) }}</textarea>
                            
                            @error('details')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Profile Image <span class="text-danger">*</span>:</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="feature_image">
                            @error('feature_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <img src="{{ asset($team->feature_image)  }}" alt="" width="100" style="border:2px solid #ccc">
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
                            <option value="1" {{ $team->
                                status == 1 ? 'selected' :
                                '' }}>Active</option>
                            <option value="2" {{ $team->
                                status == 2 ? 'selected' :
                                '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Department</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach(app('categories') as $category)
                            <option value="{{ $category->id }}" @if($team->category_id ==
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
