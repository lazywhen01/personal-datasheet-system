<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_firstName',
        'child_lastName',
        'child_birthDate'
    ];
    public function personalInformation(){
        return $this->belongsTo(PersonalInformation::class);
    }
}
