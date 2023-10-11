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
        $items = Item::paginate(10);

        return view('item-view', ['items' => $items]);
    }

    
}

//use ItemTrait;
    //public function index($items, $id, $orderedItems)
    //{
        //if ($id != null) {
            // Add to ordered items
            //if ($orderedItems == null)
               // $orderedItems = Item::where('id', $id)->all();
            //else
                //array_push(Item::where('id', $id));
            //$items = Item::paginate(10);
       // }
        //$items = Item::paginate(10);
       // return view('item-view', ['items' => $items, 'orderedItems' => $orderedItems]);
    //}
    //public function addOrder($id)
    //{
        //$items = Item::paginate(10);
        //foreach ($items as $key => $value) {
            //if ($value->id == $id) {
                //$items->forget($key);
                // unset($items[$key]);
                //break;
            //}
        //}
        //return view('item-view', ['items' => $items]);
    //}
