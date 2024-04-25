<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'educ_level',
        'educ_schoolName',
        'educ_degreeCourse',
        'educ_degreeStart',
        'educ_degreeEnd',
        'educ_highestLevel',
        'educ_yearGraduated',
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
