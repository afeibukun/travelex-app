<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileType extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function file(){
        return $this->hasMany(File::class);
    }
}
