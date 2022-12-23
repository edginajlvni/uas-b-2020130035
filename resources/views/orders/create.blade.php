@extends('layouts.master')
@section('title', 'Add New Order')
@section('content')
    <h2>Add New Order</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="status">Status</label><BR>
                {{-- <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                id="status" value="{{ old('status') }}"> --}}

                <input type="radio" class="form-check-input" id="rb1" name="opsi" value="1" checked>
                <label class="form-check-label" for="rb1">Selesai</label><br>
                <input type="radio" class="form-check-input" id="rb2" name="opsi" value="2">
                <label class="form-check-label" for="rb2">Menunggu Pembayaran</label>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
