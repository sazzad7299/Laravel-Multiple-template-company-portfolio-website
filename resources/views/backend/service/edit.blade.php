@extends('backend.layouts.app') @section('admin')
<form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title',$service->title) }}" />
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="3"
                                class="form-control">{{ old('description',$service->description) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Feature Image</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="feature_image">
                                @error('feature_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset($service->feature_image)  }}" alt="" width="100" style="border:2px solid #ccc">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gallery Image</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="gallery[]"
                                    multiple="">
                                @error('feature_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center overflow-auto">
                                @if(is_array($service->gallery))
                                @foreach ($service->gallery as $gallerys)
                                <img src="{{ asset($gallerys)  }}" alt="" width="100" style="border:2px solid #ccc">
                                @endforeach
                                @endif
                            </div>
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
                            <option value="1" {{ $service->
                                status == 1 ? 'selected' :
                                '' }}>Active</option>
                            <option value="2" {{ $service->
                                status == 2 ? 'selected' :
                                '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach(app('categories') as $category)
                            <option value="{{ $category->id }}" @if($service->category_id ==
                                $category->id) selected @endif>{{ $category->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publish Date</label>
                        <input type="date" name="date" class="form-control" value={{old('date',$service->date)}}>
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