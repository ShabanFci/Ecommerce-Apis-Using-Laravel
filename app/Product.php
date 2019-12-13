<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Product extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name', 'image', 'category_id', 'subCategory_id',
        ];

        public function category(){

            return $this->belongsTo(Category::class , 'category_id');
        }

        public function subCategory(){

            return $this->belongsTo(subCategory::class , 'subCategory_id');
        }

        
    }
