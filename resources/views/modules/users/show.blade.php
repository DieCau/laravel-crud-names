@extends('layouts/main')

<div class="container mt-4">
    <h2>Information of <span>{{ $item->name }}</span></h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('index') }}" class="btn btn-secondary mt-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
