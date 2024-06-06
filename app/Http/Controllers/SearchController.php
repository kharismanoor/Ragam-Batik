<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $items = Item::where('name', 'like', "%$query%")->get();
        return view('search', compact('items', 'query'));
    }
}
