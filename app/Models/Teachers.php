<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{

    protected $table = 'Teachers';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'degree', 'address', 'mobile',];
    use HasFactory;
}
