<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'other_category',
        'other_title'
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
