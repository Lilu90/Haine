<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories() {
        $categories = Category::all();
        return view('admin.categories.categories', [ 'categories' => $categories ]);
    }

    public function create(Request $request) {
        $numeleLaCategorie = $request->get('category_name');
        if(Category::where('name', $numeleLaCategorie)->first()) {
            throw new \Exception("The category with the name {$numeleLaCategorie} already exists");
        }
        $categ = new Category;
        $categ->name = $numeleLaCategorie;
        $categ->save();
        return $this->categories();
    }

    public function delete( Request $request, $category_id) {
        Category::find( $category_id )->delete();
        return $this->categories();
    }
}
