@extends('layouts/main')

@section('container')
    <div class="container mt-4">
        <h2>Curd con Laravel - Names</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-success">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
