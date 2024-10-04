@extends('layouts/main')

<div class="container mt-4">
    <h2>Edit User</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="name">Enter name</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{ $item->name }}">
                        <button class="btn btn-warning mt-3">Update</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
