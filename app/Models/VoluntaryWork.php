<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoluntaryWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'voluntary_orgName',
        'voluntary_orgAddress',
        'voluntary_Start',
        'voluntary_End',
        'voluntary_numHours',
        'voluntary_positionWork',
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
