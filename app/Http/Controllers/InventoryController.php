<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function showInventoryPage()
    {
        return view('inventory.index');
    }
}
