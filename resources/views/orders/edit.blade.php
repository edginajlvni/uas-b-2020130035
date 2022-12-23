@extends('layouts.master')

@section('title', 'Edit Order')
@section('content')
    <h2>Update Order</h2>
    <form action="{{ route('orders.update', ['order' => $item->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') ?? $item->id }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="status">Status</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status"
                    value="{{ old('status') ?? $order->status }}">
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
@endsection
