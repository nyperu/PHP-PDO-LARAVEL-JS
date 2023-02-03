<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function scopeFilter($query, array $filters){ //Post::newQuery()->filter()

        $query->when($filters['search']??false,fn ($query, $search)=>
        $query
            ->where('title','like','%'. request('search'). '%')
            ->orWhere('body','like','%'. request('search'). '%')

        );
        $query->when($filters['category']??false,fn ($query, $category)=>
        $query
            ->whereHas('category',fn($query)
            =>$query->where('slug',$category)
            )

//            ->whereExists(fn($query)=>
//            $query->from('categories')
//            ->whereColumn('categories.id','posts.category_id')
//            ->where('categories.slug',$category))
        );
    }
    public function category(){//bütünlüğü sağlıyor.
        return $this->belongsTo(category::class);
        //hasOne, hasMany, belongsTo, belongsToMany
    }
    public function user(){//user_id
        return $this->belongsTo(User::class);
        //hasOne, hasMany, belongsTo, belongsToMany
    }
    public function author(){//author_id
        return $this->belongsTo(User::class,'user_id');//user_id
        //hasOne, hasMany, belongsTo, belongsToMany
    }
}
