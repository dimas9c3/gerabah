<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gallery extends Model
{
    use SoftDeletes;

    protected $table = 'tb_gallery';

    protected $dates = ['deleted_at'];

    public function scopeGallery($query) {
        return $query->select('*');
    }
}
