<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use App\Product;
    use App\subCategory;

    class Category extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name'
        ];

        public function products()
        {
            return $this->hasMany(Product::class);
        }

        public function subCategories()
        {
            return $this->hasMany(subCategory::class);
        }



        
    }
