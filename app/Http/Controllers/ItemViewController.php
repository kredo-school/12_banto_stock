<?php
// ItemViewController.php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ItemTrait;

class ItemViewController extends Controller
{
    use ItemTrait;
    public function index()
    {
        $orderedItems = [];
        $items = Item::paginate(10);

        return view('item-view', ['items' => $items, 'orderedItems' => $orderedItems]);
    }

    // ... 他のメソッド
    public function addOrder($id, $orderedItems)
    {
        $orderedItems = json_decode($orderedItems);

        // Insert the new ordered item to order list
        array_push($orderedItems, (int) $id);

        $items = Item::paginate(10);

        return view('item-view', ['items' => $items, 'orderedItems' => $orderedItems]);
    }
}
