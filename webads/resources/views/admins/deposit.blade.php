@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold mb-6">Danh sách đặt cọc</h1>


<!-- Deposit Table -->
<div class="overflow-x-auto">
    <table class="min-w-full bg-white rounded-lg shadow">
        <thead class="bg-black text-white">
            <tr>
                <th class="py-2 px-4 text-left">Khách hàng</th>
                <th class="py-2 px-4 text-left">Xe</th>
                <th class="py-2 px-4 text-left">Số tiền</th>
                <th class="py-2 px-4 text-left">Màu xe</th>
                <th class="py-2 px-4 text-left">Trạng thái</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($deposits as $deposit)
            <tr class="border-b">
                <td class="py-2 px-4">{{ $deposit->user->name }}</td>
                <td class="py-2 px-4">{{ $deposit->car->name }}</td>
                <td class="py-2 px-4">{{ number_format($deposit->amount) }} VND</td>
                <td class="py-2 px-4">{{ $deposit->color }}</td>
                <td class="py-2 px-4">{{ $deposit->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection