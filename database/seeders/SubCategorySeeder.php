<?php

namespace Database\Seeders;

use App\Models\sub_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategory = new sub_category();
        $subCategory->category_id = 1;
        $subCategory->save();
    }
}
