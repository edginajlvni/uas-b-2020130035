@extends('layouts.master')
@section('title', 'Orders List')
@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Order List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('orders.create') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Add New Order List</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <a href="{{ route('orders.show', $item->id) }}">
                                {{ $item->id }}
                            </a>
                        </td>
                        <td>{{ $order->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td align="center" colspan="6">No data yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
