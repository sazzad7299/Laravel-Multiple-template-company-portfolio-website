@extends('backend.layouts.app') @section('admin')
<div class="card">
    <div class="card-header">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-10">
                    <h4>Category List</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary mb-3 mb-lg-0"><i
                            class="bi bi-plus-square-fill"></i>Add Category</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                @include('backend.message')
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ Str::limit($category->description,50) }}</td>
                                <td>
                                    {{ $category->status ==1 ?'Active' :"Inactive" }}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.category.edit', [$category->id]) }}"
                                            class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip"
                                            title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-outline-danger"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            onclick="if(confirm('Are You Sure To Delete?')){ event.preventDefault(); getElementById('delete-form-{{ $category->id }}').submit(); } else { event.preventDefault(); }"><i
                                                class="bi bi-trash-fill"></i></a>
                                        <form action="{{ route('admin.category.destroy', [$category->id]) }}"
                                            method="post" style="display: none;" id="delete-form-{{ $category->id }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="float-end mt-4" aria-label="Page navigation">
                    {{ $categories->links() }}
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection