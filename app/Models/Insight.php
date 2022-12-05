<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    use HasFactory;

    // public function members()
    // {
    //     return $this->belongsToMany(Member::class);
    // }

    protected $fillable = ['title', 'date', 'link','resume','image'];

    protected $dates = ['date'];
}
