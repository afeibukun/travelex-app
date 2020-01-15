<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function bdc(){
        return $this->hasOne(BureauDeChange::class);
    }

    public function encasher(){
        return $this->hasOne(Encasher::class);
    }
}
