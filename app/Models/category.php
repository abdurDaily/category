<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    // Define the relationship with Subcategory
    public function subcategories()
    {
        return $this->hasMany(sub_category::class);
    }
}
