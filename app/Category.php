<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id', 'id');
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent', 'id');
    }


}
