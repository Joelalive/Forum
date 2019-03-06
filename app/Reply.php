<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    public function discussion(){
        return $this->belongsTo(Discussion::class);
    }
}
