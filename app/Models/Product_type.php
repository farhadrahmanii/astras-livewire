<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khat_estashan;


class Product_type extends Model
{
    /** @use HasFactory<\Database\Factories\ProductTypeFactory> */
    use HasFactory;
    protected $table = 'product_types';
    protected $fillable = ['type_name'];

    public function khatEstashans()
    {
        return $this->hasMany(khat_estashan::class);
    }
}
