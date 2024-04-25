<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalInformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => [
				'required', 
				'string', 
				'max:255'
			],
            'middle_name' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'last_name' => [
				'required', 
				'string', 
				'max:255'
			],
            'suffix' => [
				'nullable', 
				'string', 
				'in:Sr,Jr,III,IV'
			],
            'date_birth' => [
				'required', 
				'string', 
				'max:255'
			],
            'place_birth' => [
				'required', 
				'string', 
				'max:255'
			],
            'sex' => [
				'required', 
				'string', 
				'in:Male,Female'
			],
            'civil_status' => [
				'required', 
				'string', 
				'in:Single,Married,Widowed'
			],
            'height' => [
				'required', 
				'string', 
				'max:255'
			],
            'weight' => [
				'required', 
				'string', 
				'max:255'
			],
            'blood_type' => [
				'required', 
				'string', 
				'max:255'
			],
            'gsis_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'pagibig_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'philhealth_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'sss_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'tin_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'agency_id' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'citizenship' => [
				'nullable', 
				'string', 
				'max:255'
			],
            'dualCitizenshipMethod' => [
				'nullable', 
				'string', 
			],
            'citizenshipCountry' => [
				'nullable', 
				'string', 
			],
			'resi_house' => [
				'nullable', 
				'string', 
			],
			'resi_street' => [
				'nullable', 
				'string', 
			],
			'resi_subdivision' => [
				'nullable', 
				'string', 
			],
			'resi_barangay' => [
				'nullable', 
				'string', 
			],
			'resi_city' => [
				'nullable', 
				'string', 
			],
			'resi_province' => [
				'nullable', 
				'string', 
			],
			'resi_zip' => [
				'nullable', 
				'integer', 
			],
			'perma_house' => [
				'nullable', 
				'string', 
			],
			'perma_street' => [
				'nullable', 
				'string', 
			],
			'perma_subdivision' => [
				'nullable', 
				'string', 
			],
			'perma_barangay' => [
				'nullable', 
				'string', 
			],
			'perma_city' => [
				'nullable', 
				'string', 
			],
			'perma_province' => [
				'nullable', 
				'string', 
			],
			'perma_zip' => [
				'nullable', 
				'integer', 
			],

        ];
    }
}
