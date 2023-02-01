<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category(){//bütünlüğü sağlıyor.
        return $this->belongsTo(category::class);
        //hasOne, hasMany, belongsTo, belongsToMany
    }
}
