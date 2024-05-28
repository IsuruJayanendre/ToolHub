<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Inventry_new extends Model
{
    use HasFactory;
     protected $fillable = [
            'toolName',
            'price',
            'catagory',
            'image',
            'quantity'
    ];



}
