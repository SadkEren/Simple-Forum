<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\hTTP\Controllers\IndexController;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];
}
