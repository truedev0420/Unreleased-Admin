<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'Setting';
    protected $primaryKey= 'Id';

    public $timestamps = false; 
}
