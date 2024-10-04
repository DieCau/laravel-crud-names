@extends('layouts/main')

<div class="container mt-4">
    <h2>Add New User</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        @method('POST')
                        <label for="name">Enter name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <button class="btn btn-primary mt-3">Add</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
