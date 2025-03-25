<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
{
    $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    $this->middleware('role:manager')->only(['edit', 'update']);
}
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }

    public function create()
    {
        return view('shops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Shop::create($request->all());

        return redirect()->route('shops.index');
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.show', compact('shop'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $shop = Shop::findOrFail($id);
        $shop->update($request->all());

        return redirect()->route('shops.index');
    }

    public function destroy($id)
    {
        Shop::destroy($id);
        return redirect()->route('shops.index');
    }

}


