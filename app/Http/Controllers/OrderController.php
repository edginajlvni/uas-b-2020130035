<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required|max:100',
            'stok' => 'required|max:1000',
        ]);
        // $book = new Book();
        // $book->id = $validateData['id'];
        // $book->judul = $validateData['judul'];
        // $book->halaman = $validateData['halaman'];
        // $book->kategori = $validateData['kategori'];
        // $book->penerbit = $validateData['penerbit'];
        // $book->save();
        // return "Data berhasil ditambahkan!";

        Order::create($validateData);
        $request->session()->flash('success', "Successfully adding {$validateData['id']}!");
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validateData = $request->validate([
            'id' => 'required|max:100',
            'status' => 'required|max:1000',
        ]);

        $order->update($validateData);
        $request->session()
            ->flash('success', "Successfully updating {$validateData['id']}!");
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with(
            'success',
            "Successfully deleting {$order['id']}!"
        );
    }

    public function order()
    {
        return view('order');
    }

    public function createOrder()
    {
        $orders = Order::all();
        return view('itmes.index', compact('orders'));
    }
}
