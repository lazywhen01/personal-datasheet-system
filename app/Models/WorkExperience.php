<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_dateStart',
        'work_dateEnd',
        'work_positionTitle',
        'work_Agency',
        'work_monthlySalary',
        'work_salaryStep',
        'work_status',
        'work_govService',
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
