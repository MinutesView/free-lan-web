<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;
    public function profilePic()
    {
        return $this->hasOne(stepOne::class);
    }
}
