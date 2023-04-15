<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.admin-dashboard');
    }
    public function addProduct()
    {
        $category = new Category();
        return view('backend.addProduct', ['categories' => $category->all()]);  // pass category to addProduct page for displaying category in the form
    }
    public function addProductComplete(Request $productData)
    {
        Product::addedProduct($productData);
        return redirect()->route('add.product')->with('msg', 'Product Added Successfully');
    }
    public function manageProduct()
    {
        $product = new Product();
        $category = new Category();
        return view('backend.manageProduct', ['products' => $product->all() , 'categories' => $category->all()]);
    }
    public function deleteProduct($categoryID)
    {
        Product::deletedProduct($categoryID);
        return redirect()->back();
    }
    public function updateProduct($categoryID)
    {
        $product = Product::find($categoryID);
        $category = new Category();
        return view('backend.updateProduct', ['product' => $product , 'categories' => $category->all()]);
    }
    public function updateProductComplete(Request $updatedProductData, $categoryID)
    {
        Product::updatedProduct($updatedProductData, $categoryID);
        return redirect()->route('manage.product')->with('msg', 'Product Updated Successfully');
    }





    public function addCategory()
    {
        return view('backend.addCategory');
    }
    public function addCategoryComplete(Request $categoryData)
    {
        Category::addedCategory($categoryData);
        return redirect()->route('add.category')->with('msg', 'Category Added Successfully');
    }
    public function manageCategory()
    {
        $category = new Category();
        return view('backend.manageCategory', ['categories' => $category->all()]);
    }
    public function deleteCategory($categoryID)
    {
        Category::deletedCategory($categoryID);
        return redirect()->back();
    }
    public function updateCategory($categoryID)
    {
        $category = Category::find($categoryID);
        return view('backend.updateCategory', ['category' => $category]);
    }
    public function updateCategoryComplete(Request $updatedCategoryData, $categoryID)
    {
        Category::updatedCategory($updatedCategoryData, $categoryID);
        return redirect()->route('manage.category')->with('msg', 'Category Updated Successfully');
    }
}



