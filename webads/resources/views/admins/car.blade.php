@extends('layouts.admin')

@section('title', 'Car List')

@section('content')
@auth
<br>
<!-- Button AddCar và Back -->
<!-- Button "Add New Car" -->
<!-- Button "Add New Car" -->
<a href="{{ route('admin.car.add', $category->id) }}" class="inline-block ml-5">
    <button class="bg-black text-white px-6 py-2 rounded cursor-pointer transition duration-300 hover:bg-gray-700">
        Add New Car
    </button>
</a>

<!-- Button "Back" -->
<a href="javascript:window.history.back()" class="inline-block ml-5">
    <button class="bg-black text-white px-6 py-2 rounded cursor-pointer transition duration-300 hover:bg-gray-700">
        Back
    </button>
</a>

<br><br>


<table class="table-auto w-full bg-white rounded-lg shadow ml-4">
    <thead class="bg-black text-white">
        <tr>
            <th class="px-4 py-2 text-left">Car Name</th>
            <th class="px-4 py-2 text-left">Category</th>
            <th class="px-4 py-2 text-left">Price</th>
            <th class="px-4 py-2 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $car->name }}</td>
            <td class="px-4 py-2">{{ $car->category->name ?? 'N/A' }}</td>
            <td class="px-4 py-2">{{ number_format($car->price, 2) }} VNĐ</td>
            <td class="px-4 py-2 flex space-x-2">
                <!-- Edit Button -->
                <a href="{{ route('admin.car.edit', $car->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                    Edit
                </a>
                <!-- Delete Button -->
                <form action="{{ route('admin.car.delete', $car->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        Delete
                    </button>
                </form>
                <!-- Detail Button -->
                <a href="{{ route('admin.car.detail', $car->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                    Detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> <br>
<!-- Back Button -->
<div class="flex justify-end mb-6 pr-6">
    <a href="javascript:window.history.back()" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
        Back
    </a>
</div>



@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection