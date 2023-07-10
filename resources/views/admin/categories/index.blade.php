@extends('admin.layouts.base')

@section('contents')
    <h1>Categories</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-primary"
                            href="{{ route('admin.categories.show', ['category' => $category->id]) }}">View</a>
                        <a class="btn btn-warning"
                            href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Edit</a>
                        <button class="btn btn-danger js-delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                            data-id="{{ $category->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure ?</h1>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action=""
                                data-template="{{ route('admin.categories.destroy', ['category' => '*****']) }}"
                                method="category" class="d-inline-block" id="confirm-delete">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </tbody>
    </table>
@endsection
