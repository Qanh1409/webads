@extends('layouts.admin')

@section('title', 'Category')

@section('content')
@auth
<div class="flex">
    <!-- Main Content Area -->
    <div class="flex-1 p-6 overflow-y-auto max-h-screen">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Category List</h1>
            <p class="text-lg">Hello, {{ Auth::user()->name }}</p>
        </header>

        <!-- Insert Button -->
        <div class="mb-6">
            <a href="{{route('admin.category.add')}}" class="text-blue-500 hover:text-blue-700">Add New Category</a>
        </div>

        <!-- Category Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Category Name</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="border-b">
                        <td class="py-2 px-4 truncate">{{ $category->name }}</td>
                        <td class="py-2 px-4 flex space-x-2">
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
<!-- Unauthorized Access Message -->
<div class="flex-1 p-6 text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection