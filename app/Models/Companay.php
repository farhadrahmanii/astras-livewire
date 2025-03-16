<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khat_estashan;

class Companay extends Model
{
    /** @use HasFactory<\Database\Factories\CompanayFactory> */
    use HasFactory;
    protected $table = 'companays';
    protected $fillable = ['name'];

    public function khatEstashans()
    {
        return $this->hasMany(khat_estashan::class);
    }
}
