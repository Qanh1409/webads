@extends('layouts.admin')

@section('title', 'Car List')

@section('content')
@auth
<div class="mb-6">
    <a href="{{route('admin.car.add',$category->id)}}" class="text-blue-500 hover:text-blue-700">Add New Car</a>
</div>
<table class="min-w-full bg-white rounded-lg shadow">
    <thead class="bg-blue-800 text-white">
        <tr>
            <th class="py-2 px-4 text-left">Car Name</th>
            <th class="py-2 px-4 text-left">Category</th>
            <th class="py-2 px-4 text-left">Price</th>
            <th class="py-2 px-4 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr class="border-b">
            <td class="py-2 px-4 truncate">{{ $car->name }}</td>
            <td class="py-2 px-4">{{ $car->category->name ?? 'N/A' }}</td>
            <td class="py-2 px-4">{{ number_format($car->price, 2) }} VNĐ</td>
            <td class="py-2 px-4 flex space-x-2">
                <a href="{{route('admin.car.edit',$car->id)}}" class="text-blue-500 hover:text-blue-700">Edit</a>
                <form action="{{route('admin.car.delete',$car->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>

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