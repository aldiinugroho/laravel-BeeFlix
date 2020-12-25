<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episodes extends Model
{
    //
    protected $table = 'episodes';

    public function movies() {
        return $this->belongsTo(movies::class, 'id','movie_id');
    }
}
