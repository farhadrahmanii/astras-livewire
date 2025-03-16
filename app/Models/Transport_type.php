<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khat_estashan;

class Transport_type extends Model
{
    /** @use HasFactory<\Database\Factories\TransportTypeFactory> */
    use HasFactory;
    
    protected $table = 'transport_types';

    protected $fillable = ['type_name'];

    public function khatEstashans()
    {
        return $this->hasMany(khat_estashan::class);
    }
}
