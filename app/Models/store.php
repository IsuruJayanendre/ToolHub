<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
   // protected $tablec = 'stores';
    protected $fillable = [
    'toolName',
    'price',
    'catagory',
    'quantity',
    'image',
    ];
}
