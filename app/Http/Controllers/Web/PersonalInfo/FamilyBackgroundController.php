<?php

namespace App\Http\Controllers\Web\PersonalInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StoreFamilyBackgroundRequest;
use App\Models\FamilyBackground;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FamilyBackgroundController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreFamilyBackgroundRequest $request,  FamilyBackground $family)
    {
		// dd($family);
		$validated = $request->validated();
        $family->spouse_surname 		  		= $validated['spouse_surname'];
		$family->spouse_firstname 		   		= $validated['spouse_firstname'];
		$family->spouse_middlename 		   		= $validated['spouse_middlename'];
		$family->spouse_suffix 			   		= $validated['spouse_suffix'];
		$family->spouse_occupation 		   		= $validated['spouse_occupation'];
		$family->spouse_employer 	    		= $validated['spouse_employer'];
		$family->spouse_businessadd   			= $validated['spouse_businessadd'];
		$family->spouse_phone     				= $validated['spouse_phone'];
		$family->fathers_surname 		    	= $validated['fathers_surname'];
		$family->fathers_firstname 		    	= $validated['fathers_firstname'];
		$family->fathers_middlename 				= $validated['fathers_middlename'];
		$family->fathers_suffix 			  		= $validated['fathers_suffix'];
		$family->mothers_surname 				= $validated['mothers_surname'];
		$family->mothers_firstname 				= $validated['mothers_firstname'];
		$family->mothers_middlename 			    = $validated['mothers_middlename'];
		$family->mothers_suffix 			    = $validated['mothers_suffix'];


        //Save
        $family -> update();

        //Alert Toast
		Alert::toast('Family Background information has been successfully added.', 'success');

        return back();

    }
    }
