<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
     // Define the relationship with Category
     public function category()
     {
         return $this->belongsTo(Category::class);
     }
}
