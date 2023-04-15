<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    static $product, $image, $imageName, $directory;
    static function imageURL($productData)
    {
        self::$image = $productData->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'backend/product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function addedProduct($productData)
    {
        self::$product = new Product();
        self::$product->name = $productData->productName;
        self::$product->description = $productData->description;
        self::$product->categoryID = $productData->categoryID;
        self::$product->price = $productData->price;
        self::$product->image = self::imageURL($productData);
        self::$product->save();

    }
    public static function deletedProduct($id)
    {
        $product = Product::find($id);
        if(file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
    }
    public static function updatedProduct($updatedProductData, $id)
    {
        $product = Product::find($id);
        $product->name = $updatedProductData->productName;
        $product->description = $updatedProductData->description;
        $product->categoryID = $updatedProductData->categoryID;
        $product->price = $updatedProductData->price;
        if($updatedProductData->file('image')){
            if(file_exists($product->image)){
                unlink($product->image);
            }
            $product->image = self::imageURL($updatedProductData);
        }
        $product->save();
    }
}
