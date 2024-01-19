@if (session()->has('success'))
<div class="alert border-0 bg-light-success alert-dismissible fade show">
    <div class="text-success">{{ session('success')}}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('error'))
<div class="alert border-0 bg-light-danger alert-dismissible fade show">
    <div class="text-danger">{{ session('error')}}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('warning'))
<div class="alert border-0 bg-light-warning alert-dismissible fade show">
    <div class="text-warning">{{ session('warning')  }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif