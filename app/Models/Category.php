<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name','description'];

    // model relationship 
    function products(){
        // select * form products where category_id=id
        return $this->hasMany(Product::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

