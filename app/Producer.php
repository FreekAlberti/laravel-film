<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    public function films() 
    {
        return $this->hasMany("App\Film");
    }
}
