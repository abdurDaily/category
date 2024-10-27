<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new category();
        $category->category_name = "one";
        $category->save();

        
        $category = new category();
        $category->category_name = "two";
        $category->save();

        $category = new category();
        $category->category_name = "three";
        $category->save();



    }
}
