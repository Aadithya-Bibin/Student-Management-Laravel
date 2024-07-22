<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deatil extends Model
{
    use HasFactory;
    protected $fillable=[
        'rollnum','name','marks'
    ];
}
