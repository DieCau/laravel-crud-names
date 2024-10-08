@extends('layouts/main')

@section('container')
    <div class="container mt-4">
        <h2>Users - Names</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-success">
                            <i class="fa-solid fa-user-plus"></i> Add User
                        </a>
                        <hr>
                        <table class="table table-sm table-hover text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Names</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <form action="{{ route('destroy', $item->id) }}" class="form-delete" method='POST'>
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('show', $item->id) }}" class="btn btn-info"><i
                                                        class="fa-solid fa-list-check"></i>
                                                    Show List</a>
                                                <a href="{{ route('edit', $item->id) }}" class="btn btn-warning"><i
                                                        class="fa-regular fa-pen-to-square"></i> Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                    Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Not Data in the Database...</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Your register has been deleted.",
                icon: "success"
            });
        </script>
    @endif


    <script>

        $('.form-delete').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        });
    </script>
@endsection
