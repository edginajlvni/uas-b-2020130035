<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
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
            'id' => 'required|max:20',
            'nama' => 'required|max:1000',
            'harga' => 'required|min: 0, max:898989',
            'stok' => 'required|min:0 , max:100000',
        ]);
        // $book = new Book();
        // $book->id = $validateData['id'];
        // $book->judul = $validateData['judul'];
        // $book->halaman = $validateData['halaman'];
        // $book->kategori = $validateData['kategori'];
        // $book->penerbit = $validateData['penerbit'];
        // $book->save();

        Item::create($validateData);
        $request->session()->flash('success', "Berhasil menambahkan ID :{$validateData['id']}, dengan nama: {$validateData['nama']}!");
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validateData = $request->validate([
            'id' => 'required|max:20',
            'nama' => 'required|max:1000',
            'harga' => 'required|min: 0, max:898989',
            'stok' => 'required|min:0 , max:100000',
        ]);

        $item->update($validateData);
        $request->session()
            ->flash('success', "Berhasil melakukan update untuk ID: {$validateData['id']}, dengan nama: {$validateData['nama']}!");
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with(
            'success',
            "Successfully deleting {$item['nama']}!"
        );
    }
}
