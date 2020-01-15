<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encasher extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function bdc(){
        return $this->hasOne(BureauDeChange::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
