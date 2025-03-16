<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_type;
use App\Models\Transport_type;
use App\Models\Companay;
use App\Models\Products;
use App\Models\Countrys;
class khat_estashan extends Model
{
    /** @use HasFactory<\Database\Factories\KhatEstashanFactory> */
    use HasFactory;
    protected $table = 'khat_estashans';
    protected $fillable = ['product_type_id', 'transport_type_id', 'user_id', 'companay_id',
     'product_id', 'country_from_id', 'country_to_id', 'number_of_wagon', 'wigth', 'number_of_bar',
      'date_of_out', 'date_of_in'];

    public function productType()
    {
        return $this->belongsTo(Product_type::class);
    }

    public function transportType()
    {
        return $this->belongsTo(Transport_type::class);
    }
    public function companay()
    {
        return $this->belongsTo(Companay::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function country()
    {
        return $this->belongsTo(Countrys::class);
    }
}
