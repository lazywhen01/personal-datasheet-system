<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FamilyBackground extends Model
{
    use HasFactory, Notifiable;

    /**
	 * The attributes that are mass assignable.
	 *
	 */

	 protected $table = 'family_background';

	protected $fillable = [
		'spouse_surname',
		'spouse_firstname',
		'spouse_middlename',
		'spouse_suffix',
		'spouse_occupation',
		'spouse_employer',
		'spouse_businessadd',
		'spouse_phone',
		'fathers_surname',
		'fathers_firstname',
		'fathers_middlename',
		'fathers_suffix',
		'mothers_surname',
		'mothers_firstname',
		'mothers_middlename',
		'mothers_suffix',
	];

	public function personalInformation(){
		return $this->belongsTo(PersonalInformation::class);
	}

}
