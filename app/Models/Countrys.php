<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khat_estashan;


class Countrys extends Model
{
    /** @use HasFactory<\Database\Factories\CountrysFactory> */
    use HasFactory;
    protected $table = 'countrys';
    protected $fillable = ['name'];

    public function khatEstashans()
    {
        return $this->hasMany(      khat_estashan::class);
    }
}
