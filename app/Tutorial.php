<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public function user(){
        $this->belongsTo("App\User", "users");
    }
}
