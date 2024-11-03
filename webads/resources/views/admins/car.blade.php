@extends('layouts.admin')

@section('title', 'Car List')

@section('content')
@auth

<!-- Button AddCar và Back -->
<!-- Button "Add New Car" -->
<a href="{{ route('admin.car.add', $category->id)}}" style="text-decoration: none;">
    <button style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">
        Add New Car
    </button>
</a>

<!-- Button "Back" -->
<a href="javascript:window.history.back()" style="text-decoration: none;">
    <button style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
        Back
    </button>
</a>

<!-- 
<div class="mb-6">
    <a href="{{ route('admin.car.add', $category->id) }}" class="btn-link">Add New Car</a>
    <a href="YOUR_BACK_URL" class="btn-primary">Back</a>
</div> -->


<table class="table-auto w-full bg-white rounded-lg shadow">
    <thead class="bg-blue-800 text-white">
        <tr>
            <th class="table-header">Car Name</th>
            <th class="table-header">Category</th>
            <th class="table-header">Price</th>
            <th class="table-header">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr class="border-b">
            <td class="table-cell">{{ $car->name }}</td>
            <td class="table-cell">{{ $car->category->name ?? 'N/A' }}</td>
            <td class="table-cell">{{ number_format($car->price, 2) }} VNĐ</td>
            <td class="table-cell flex space-x-2">
                <a href="{{ route('admin.car.edit', $car->id) }}" class="btn-link">Edit</a>
                <form action="{{ route('admin.car.delete', $car->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Delete</button>
                </form>
                <a href="{{ route('admin.car.detail', $car->id) }}" class="btn-link">Detail</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection