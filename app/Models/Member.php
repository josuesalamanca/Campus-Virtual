<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // public function insights()
    // {
    //     return $this->belongsToMany(Insight::class);
    // }

    protected $fillable = ['fullName', 'job', 'email','biography','image'];
}
