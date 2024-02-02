@extends('backend.layouts.app') @section('admin')
<div class="card">
    <div class="card-header">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-10">
                    <h4>Portfolio List</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary mb-3 mb-lg-0"><i
                            class="bi bi-plus-square-fill"></i>Add Portfolio</a>
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
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $key=>$post)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{!! Str::limit($post->description, 30) !!}</td>
                                <td>
                                    {{ $post->post_type}}
                                </td>
                                <td>
                                    {{ $post->status ==1 ?'Active' :"Inactive" }}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.portfolio.edit', [$post->id]) }}"
                                            class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip"
                                            title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-outline-danger"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            onclick="if(confirm('Are You Sure To Delete?')){ event.preventDefault(); getElementById('delete-form-{{ $post->id }}').submit(); } else { event.preventDefault(); }"><i
                                                class="bi bi-trash-fill"></i></a>
                                        <form action="{{ route('admin.portfolio.destroy', [$post->id]) }}" method="post"
                                            style="display: none;" id="delete-form-{{ $post->id }}">
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
                    {{ $posts->links() }}
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection
