<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningDevelopment extends Model
{
    use HasFactory;
    protected $fillable = [
        'lnd_title',        
        'lnd_start',        
        'lnd_end',        
        'lnd_numHours',        
        'lnd_typeId',        
        'lnd_sponsor',        
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
