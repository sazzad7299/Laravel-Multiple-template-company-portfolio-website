@extends('backend.layouts.app')
@section('admin')
<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.project.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Project</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-medal"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.service.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Service</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-donate-heart"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.portfolio.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Portfolio</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-wind"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.blog.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Blog</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-heart-circle"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.team.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Testiominal</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-user-circle"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card rounded-4">
            <div class="card-body">
                <a href="{{ route('admin.slider.create') }}"    class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">New Slider</p>
                    </div>
                    <div class="ms-auto widget-icon bg-primary text-white">
                        <i class="bx bx-movie"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
