<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'amwal_type',
        'Tkhlaya_Az_tareq',
        'bar_ba',
        'company_name',
        'number_act',
        'number_car',
        'number_code',
        'date',
        'product_type',
        'product_name',
        'maoda',
        'morawaga',
        'wigth_by_kg',
        'wigth_tan',
        'price_by_kg',
        'takhlaya_date',
        'representativ_name',
        'bar_chalany',
        'bar_nama_number',
        'send_date',
        'driver_name',
        'send_number_car',
        'send_maoda',
        'send_morawaga',
        'send_wigth_by_kg',
        'send_wigth_tan'
    ];
}
