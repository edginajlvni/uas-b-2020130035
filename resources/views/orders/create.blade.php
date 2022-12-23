{{-- nampilin form tambah order --}}

@extends('layouts.master')
@section('title', 'Add New Order')
@section('content')
    <h2>Add New Order</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <ul class="list-inline">
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
                    <label for="nama">Nama</label><BR>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" value="{{ old('nama') }}">
                    @error('id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    {{-- <input type="radio" class="form-check-input" id="rb1" name="opsi" value="1" checked>
                <label class="form-check-label" for="rb1">Selesai</label><br>
                <input type="radio" class="form-check-input" id="rb2" name="opsi" value="2">
                <label class="form-check-label" for="rb2">Menunggu Pembayaran</label>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror --}}
                </div>
                <div class="col-md-6 mb-3">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                        id="harga" value="{{ old('harga') }}">
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="kuantitas">Kuantitas</label>
                    <input type="text" class="form-control @error('kuantitas') is-invalid @enderror" name="kuantitas"
                        id="kuantitas" value="{{ old('kuantitas') }}">
                    @error('kuantitas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="kuantitas">Status Pembayaran</label><BR>
                    <div class="col-md-6 mb-3">
                        <input type="radio" class="form-check-input" id="rb1" name="opsi" value="1" checked>
                        <label class="form-check-label" for="rb1">Selesai</label><br>
                        <input type="radio" class="form-check-input" id="rb2" name="opsi" value="2">
                        <label class="form-check-label" for="rb2">Menunggu Pembayaran</label>
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="kuantitas">Stok</label>
                    <input type="text" class="form-control @error('kuantitas') is-invalid @enderror" name="kuantitas"
                        id="kuantitas" value="{{ old('kuantitas') }}">
                    @error('kuantitas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
        </ul>
        <hr>

        {{-- <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">Total : </label>
            </div> --}}
            {{-- </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">PPN : 11% </label>
 --}}
            <p class="lead"> Total:</p>
            <p class="lead"> PPN: 11%</p>
            <p class="lead"> Sub Total: </p>
        </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Totalkan</button>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
        {{-- @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="id">ID</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"
                        id="id" value="{{ old('id') }}">
                    @error('id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
    </form>
@endsection
