<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Queue extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function encasher(){
        return $this->hasOne(Encasher::class);
    }

    public function bdc(){
        return $this->hasOne(BureauDeChange::class);
    }
}
