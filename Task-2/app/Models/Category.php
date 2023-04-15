<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    static $category, $image, $imageName, $directory;
    static function imageURL($categoryData)
    {
        self::$image = $categoryData->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'backend/category-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function addedCategory($categoryData)
    {
        self::$category = new Category();
        self::$category->name = $categoryData->categoryName;
        self::$category->description = $categoryData->description;
        self::$category->image = self::imageURL($categoryData);
        self::$category->save();

    }
    public static function deletedCategory($id)
    {
        $category = Category::find($id);
        if(file_exists($category->image)){
            unlink($category->image);
        }
        $category->delete();
    }
    public static function updatedCategory($updatedCategoryData, $id)
    {
        $category = Category::find($id);
        $category->name = $updatedCategoryData->categoryName;
        $category->description = $updatedCategoryData->description;
        if($updatedCategoryData->file('image')){
            if(file_exists($category->image)){
                unlink($category->image);
            }
            $category->image = self::imageURL($updatedCategoryData);
        }
        $category->save();
    }
}
