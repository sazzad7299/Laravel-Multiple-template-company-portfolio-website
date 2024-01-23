@extends('backend.layouts.app') @section('admin')
<div class="card">
    <div class="card-body">
        @include('backend.message')
        <ul class="nav nav-tabs nav-success" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#successhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                        </div>
                        <div class="tab-title">General </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#successprofile" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                        </div>
                        <div class="tab-title">About us</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#successcontact" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Contact Us</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#successquick" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Quick Contact</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane fade show active" id="successhome" role="tabpanel">
                <form action="{{ route('admin.settings.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Site Title <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="site_title" value="{{ old('site_title',app('settings')['site_title']) }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Meta Title <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="site_meta_title" value="{{ old('site_meta_title',app('settings')['site_meta_title'])}}">
                            @error('site_meta_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Logo (373px, 108px)</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="site_default_logo">
                                @error('site_default_logo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset( app('settings')['site_default_logo']  )}}" alt="" style="border:2px solid #ccc">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Light Logo (373px, 108px)</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="site_light_logo">
                                @error('site_light_logo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset( app('settings')['site_light_logo']  )}}" alt="" style="border:2px solid #ccc">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Fav icon ((180px, 180px))</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="site_fav_icon">
                                @error('site_fav_icon')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset( app('settings')['site_fav_icon']  )}}" alt="" style="border:2px solid #ccc">
                            </div>
                        </div>
                        <div class="mx-auto">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="successprofile" role="tabpanel">
                <form action="{{ route('admin.settings.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">About Title <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="about_title" value="{{ old('about_title',app('settings')['about_title']) }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Cover Image(600x400)</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="about_image">
                                @error('about_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset( app('settings')['site_default_logo']  )}}" alt="" style="border:2px solid #ccc">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">About Description<span class="text-danger">*</span> :</label>
                            <textarea name="about_description"  rows="10" class="form-control">{{ old('about_description',app('settings')['about_description'])}}</textarea>
                            @error('about_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mx-auto">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="successcontact" role="tabpanel">
                <form action="{{ route('admin.settings.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Title <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="contact_title" value="{{ old('contact_title',app('settings')['contact_title']) }}">
                            @error('contact_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Number <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="contact_phone" value="{{ old('contact_phone',app('settings')['contact_phone']) }}">
                            @error('contact_phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Email <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="contact_email" value="{{ old('contact_email',app('settings')['contact_email']) }}">
                            @error('contact_email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Office Address<span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="office_address" value="{{ old('office_address',app('settings')['office_address']) }}">
                            @error('office_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Google Map Url<span class="text-danger">*</span> :</label>
                            <textarea name="g_map" rows="3" class="form-control">{{ old('g_map',app('settings')['g_map']) }}</textarea>
                            @error('g_map')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mx-auto">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="successquick" role="tabpanel">
                <form action="{{ route('admin.settings.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Quick chat Title<span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="lets_talk" value="{{ old('lets_talk',app('settings')['lets_talk']) }}">
                            @error('lets_talk')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Quick chat Number <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="lets_talk_phone" value="{{ old('lets_talk_phone',app('settings')['lets_talk_phone']) }}">
                            @error('lets_talk_phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Quick Chat text <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" name="lets_talk_description" value="{{ old('lets_talk_description',app('settings')['lets_talk_description']) }}">
                            @error('lets_talk_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mx-auto">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection