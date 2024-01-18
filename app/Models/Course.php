<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Courses';
    protected $primarykey = 'id';
    protected $fillable = ['trainer_name', 'course_name', 'duration'];
    use HasFactory;
}
