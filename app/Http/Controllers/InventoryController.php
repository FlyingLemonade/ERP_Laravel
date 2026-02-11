<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function showInventoryPage()
    {
        $inventoryList = Inventory::all();
        return view('inventory.index', compact('inventoryList'));
    }

    public function edit($id)
    {
        $item = Inventory::findOrFail($id);
        return view('inventory.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Inventory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price_average' => 'required|integer|min:0',
            'description' => 'required|string',
        ]);

        $item->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price_average' => $request->price_average,
            'description' => $request->description,
        ]);

        return redirect()->route('inventory.index')
            ->with('success', 'Item updated successfully.');
    }

    public function delete(Request $request, $id)
    {
        $item = Inventory::findOrFail($id);

        $item->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Item deleted successfully.');
    }
}
