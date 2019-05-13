<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class donasi extends Model
{
   use SoftDeletes;

    protected $table = 'tb_donasi';

    protected $dates = ['deleted_at'];

    public function scopeDonasi($query) {
        return $query->select('*');
    }
}
