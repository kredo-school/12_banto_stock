<?php
namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    private $category;
    private $item;
    public function __construct(Category $category,Item $item)
    {
        $this->category = $category;
        $this->item = $item;
    }
    public function index()
    {
        $all_categories = Category::with('item')->latest()->paginate(8);
        return view('category.index')->with('all_categories',$all_categories);
    }
    public function itemindex($id) //item index function show up  item in the category
{
    $category = Category::with('item')->find($id);
    if (!$category) {
        // category not found is show up
    }
    $items = $category->item()->paginate(8);
    return view('category.categoryitemlist',compact('category','items'));
}
    // public function edit($id)
    // {
    //     $category = Category::find($id);
    //     return view('category.edit' ,compact('category'));
    // }


    public function edit($id)
    {
        $category = $this->category->findOrFail($id);
        $all_categories = $this->category->all();
        $selected_categories = [];
        if ($category->categories !== null && $category->categories->isNotEmpty()) {
            foreach($category->categories as $categories_item) {
                $selected_categories[] = $categories_item->id;
            }
        }
        return view('category.edit')
               ->with('category',$category)
               ->with('all_categories',$all_categories)
               ->with('selectedCategories',$selected_categories);
    }

    public function update(Request $request, $id)
    {
        $category = $this->category->findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $category->name = $request->name;

        if ($request->image) {
            $category->image = 'data:image/'. $request->image->extension() . ';base64,' .base64_encode(file_get_contents($request->image));
        }
        $category->save();

        return redirect()->route('category.edit', $category->id)->with('category', $category);
    }
    public function store(Request $request)
{
     $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $this->category->name = $request->name;
    $this->category->image      ='data:image/'. $request->image->extension(). ';base64,' . base64_encode(file_get_contents($request->image));
    $this->category->save();

    return redirect()->route('category.index');
}

}