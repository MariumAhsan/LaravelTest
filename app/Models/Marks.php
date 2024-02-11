<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'student_id', 'evaluation_type', 'achieved_marks'];
    //protected $fillable = ['first_name', 'last_name', 'student_id', 'test_marks', 'mid_marks','final_marks', 'project_marks'];
}
