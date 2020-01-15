<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function file_type(){
        return $this->hasOne(FileType::class);
    }
}
