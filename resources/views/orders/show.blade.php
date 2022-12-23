@extends('layouts.master')
@section('title', $order->id)
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $order->id }}</h2>
                <h5>
                    <span class="badge badge-primary">
                        <i class="fa fa-star fa-fw"></i>
                        {{ $order->status }}
                    </span>
                </h5>
            </div>
        </div>
    @endsection
