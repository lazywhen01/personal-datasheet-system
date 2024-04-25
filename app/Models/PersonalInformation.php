<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PersonalInformation extends Model
{
    use HasFactory, Notifiable;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'suffix',
		'date_birth',
		'place_birth',
		'sex',
		'civil_status',
		'height',
		'weight',
		'blood_type',
		'gsis_id',
		'pagibig_id',
		'philhealth_id',
		'sss_id',
		'tin_id',
		'agency_id',
		'citizenship',
		'dualCitizenshipMethod',
		'citizenshipCountry',
		'resi_house',
		'resi_street',
		'resi_subdivision',
		'resi_barangay',
		'resi_city',
		'resi_province',
		'resi_zip',
		'perma_house',
		'perma_street',
		'perma_subdivision',
		'perma_barangay',
		'perma_city',
		'perma_province',
		'perma_zip',
	];

	public function familyBackground(){
		return $this->hasOne(FamilyBackground::class);
	}

	public function civilService(){
		return $this->hasMany(CivilService::class);
	}

	public function children(){
		return $this->hasMany(Child::class);
	}
	public function educationalBackground(){
		return $this->hasMany(EducationalBackground::class);
	}
	public function workExperience(){
		return $this->hasMany(WorkExperience::class);
	}
	public function voluntaryWorks(){
		return $this->hasMany(VoluntaryWork::class);
	}
	public function learningDevelopments(){
		return $this->hasMany(LearningDevelopment::class);
	}
	public function otherInformation(){
		return $this->hasMany(OtherInformation::class);
	}
}