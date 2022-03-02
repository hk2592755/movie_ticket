<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = "payments";
    protected $fillable =[
        'name',
        'email',
        'phoneno',
        'select',
        'nameofcard',
        'expiration',
        'cvv'


    ];
    use HasFactory;

}
