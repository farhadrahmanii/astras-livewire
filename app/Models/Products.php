<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khat_estashan;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name'];

    public function khatEstashans()
    {
        return $this->hasMany(khat_estashan::class);
    }
}
