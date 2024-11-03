@extends('layouts.admin')

@section('title', 'Car Details')

@section('content')
@auth
<div class="container mx-auto mt-10 p-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Car Details</h2>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Car ID</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Car Name</th>
                    <th class="table-header">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carDetail as $detail)
                <tr class="border-t border-gray-200">
                    <td class="py-4 px-6 text-sm text-gray-700">{{ $detail->car_id }}</td>
                    <td class="py-4 px-6 text-sm text-gray-700">{{ $detail->car->name }}</td>
                    <td class="table-cell flex space-x-2">
                        <a href="{{ route('admin.carDetail.edit', $detail->id) }}" class="btn-link">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection