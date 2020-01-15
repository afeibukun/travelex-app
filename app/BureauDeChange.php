<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BureauDeChange extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
