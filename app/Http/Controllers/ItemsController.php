<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function items() {
        $items = Item::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('items.items', [
            'items' => $items,
            'branduri' => $brands,
            'categorii' => $categories
        ]);
    }

    public function createItem(Request $req) {
        $item = new Item();
        $item->category_id = $req->input('category');
        $item->brand_id = $req->input('brand');
        $item->title = $req->input('title');
        $item->description = $req->input('description');
        $item->save();

        return $this->items();
    }
}

