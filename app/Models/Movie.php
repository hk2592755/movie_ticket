<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable =[
        'name',
        'year',
        'genre',
        'date',
        'file_path',
        'trailer_path'


    ];
}
