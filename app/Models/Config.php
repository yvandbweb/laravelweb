<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $table = "config";
    use HasFactory;

    public function items()
    {
        return $this->hasMany('App\Models\items');
    }    
}