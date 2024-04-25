<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamilyBackgroundRequest extends FormRequest
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
            'spouse_surname' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_firstname' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_middlename' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_suffix' => [
				'required',
				'string',
                'in:Sr,Jr,III,IV'
			],
            'spouse_occupation' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_employer' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_businessadd' => [
				'required',
				'string',
				'max:255'
			],
            'spouse_phone' => [
				'required',
				'string',
				'max:255'
			],
            'fathers_surname' => [
				'required',
				'string',
				'max:255'
			],
            'fathers_firstname' => [
				'required',
				'string',
				'max:255'
			],
            'fathers_middlename' => [
				'required',
				'string',
				'max:255'
			],
            'fathers_suffix' => [
				'required',
				'string',
                'in:Sr,Jr,III,IV'
			],
            'mothers_surname' => [
				'required',
				'string',
				'max:255'
			],
            'mothers_firstname' => [
				'required',
				'string',
				'max:255'
			],
            'mothers_middlename' => [
				'required',
				'string',
				'max:255'
			],
            'mothers_suffix' => [
				'required',
				'string',
				'in:Sr,Jr,III,IV'
			],
        ];
    }
}
