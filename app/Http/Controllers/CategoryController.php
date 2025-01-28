<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showProducts($id){
        $category = Category::find($id);

        if (!$category) {
            return view('category-products', ['error' => 'Category not found']);
        }


        return view('category-products', [
            'category' => $category,
            'products' => $category->products
        ]);
    }

    public function listCategories()
    {
        $categories = Category::all();

        return view('categories-list', [
            'categories' => $categories
        ]);
    }

}
