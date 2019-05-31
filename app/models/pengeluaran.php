<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengeluaran extends Model
{
    use SoftDeletes;

    protected $table = 'tb_pengeluaran';

    protected $dates = ['deleted_at'];

    public function scopePengeluaran($query) {
        return $query->select('*');
    }
}
