<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionCode extends Model
{
    protected $table = 'PromotionCode';
    protected $primaryKey= 'Id';

    public $timestamps = true; 
}
