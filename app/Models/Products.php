<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'price',
        'sale',
        'sold',
        'description',
        'detail',
        'status',
        'category_id',
        ];
     


        public function scopeNewProducts($query,$limit){
            return $query->orderBy('id','desc')->limit($limit)->with(['Categories']);
        }
        public function scopeBestsellProducts($query,$limit){
            return $query->where('sold', '>', 0)->orderBy('id','desc')->limit($limit)->with(['Categories']);
        }

        public function relatedProducts($category_id, $id)
    {
        return Products::where('category_id', $this->category_id)
                        ->where('id', '!=', $this->id)
                        ->get();
    }

        public function categories()
        {
        return $this->belongsTo(Categories::class);
        }
        public function orderdetails()
        {
        return $this->hasMany(Orderdetails::class);
        }
}
