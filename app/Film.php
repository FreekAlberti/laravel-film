<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function producer() 
    {
        return $this->belongsTo("App\Producer");
    }
}
