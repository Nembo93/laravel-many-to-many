<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['slug'];

    public function Type()
    {
        return $this->belongsTo(Type::class);
    }

    public function Technology(){
        return $this->belongsTo(Technology::class);
    }
}
