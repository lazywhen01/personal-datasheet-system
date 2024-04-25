<?php

namespace App\Http\Controllers\Web\PersonalInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StorePersonalInfoRequest;
use App\Http\Requests\Form\UpdatePersonalInformationRequest;
use App\Models\FamilyBackground;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;


use App\Models\PersonalInfo;
use Illuminate\Http\Response;

class PersonalInfoController extends Controller
{
	public function index()
	{

		return view('personal.index');
	}

	public function create()
	{
		return view('personal.create');
	}

	public function store(StorePersonalInfoRequest $request, PersonalInformation $personal)
	{
		$validated = $request->validated();

		// validated data

		$personal 					    = new PersonalInformation;
		$personal->first_name 		    = $validated['first_name'];
		$personal->middle_name 		    = $validated['middle_name'];
		$personal->last_name 		    = $validated['last_name'];
		$personal->suffix 			    = $validated['suffix'];
		$personal->date_birth 		    = $validated['date_birth'];
		$personal->place_birth 	    	= $validated['place_birth'];
		$personal->sex   			    = $validated['sex'];
		$personal->civil_status     	= $validated['civil_status'];
		$personal->height 		    	= $validated['height'];
		$personal->weight 		    	= $validated['weight'];
		$personal->blood_type 			= $validated['blood_type'];
		$personal->gsis_id 			    = $validated['gsis_id'];
		$personal->pagibig_id 			= $validated['pagibig_id'];
		$personal->philhealth_id 		= $validated['philhealth_id'];
		$personal->sss_id 			    = $validated['sss_id'];
		$personal->tin_id 			    = $validated['tin_id'];
		$personal->agency_id 			= $validated['agency_id'];
		$personal->citizenship 			= $validated['citizenship'];
		$personal->dualCitizenshipMethod = $validated['dualCitizenshipMethod'];
		$personal->resi_house		 	= $validated['resi_house'];
		$personal->resi_street		 	= $validated['resi_street'];
		$personal->resi_subdivision 	= $validated['resi_subdivision'];
		$personal->resi_barangay	 	= $validated['resi_barangay'];
		$personal->resi_city		 	= $validated['resi_city'];
		$personal->resi_province	 	= $validated['resi_province'];
		$personal->resi_zip			 	= $validated['resi_zip'];
		$personal->perma_house		 	= $validated['perma_house'];
		$personal->perma_street		 	= $validated['perma_street'];
		$personal->perma_subdivision 	= $validated['perma_subdivision'];
		$personal->perma_barangay	 	= $validated['perma_barangay'];
		$personal->perma_city		 	= $validated['perma_city'];
		$personal->perma_province	 	= $validated['perma_province'];
		$personal->perma_zip		 	= $validated['perma_zip'];
		$personal->save();
		// save

				
		$familyBackground  = new FamilyBackground();
		$familyBackground->personal_information_id = $personal->id;
		$familyBackground->save();


		
		//toast
		Alert::toast('Personal information has been successfully added.', 'success');

		return redirect()->route('personal.index');
	}

	public function update(UpdatePersonalInformationRequest  $request, PersonalInformation $personal)
	{
		$data = $request->validated();
		// dd($data);

		// validated data

		$personal->first_name 		    = $data['first_name'];
		$personal->middle_name 		    = $data['middle_name'];
		$personal->last_name 		    = $data['last_name'];
		$personal->suffix 			    = $data['suffix'];
		$personal->date_birth 		    = $data['date_birth'];
		$personal->place_birth 	    	= $data['place_birth'];
		$personal->sex   			    = $data['sex'];
		$personal->civil_status     	= $data['civil_status'];
		$personal->height 		    	= $data['height'];
		$personal->weight 		    	= $data['weight'];
		$personal->blood_type 			= $data['blood_type'];
		$personal->gsis_id 			    = $data['gsis_id'];
		$personal->pagibig_id 			= $data['pagibig_id'];
		$personal->philhealth_id 		= $data['philhealth_id'];
		$personal->sss_id 			    = $data['sss_id'];
		$personal->tin_id 			    = $data['tin_id'];
		$personal->agency_id 			= $data['agency_id'];
		$personal->citizenship 			= $data['citizenship'];
		$personal->dualCitizenshipMethod = $data['dualCitizenshipMethod'];
		$personal->citizenshipCountry 	= $data['citizenshipCountry'];
		$personal->resi_house		 	= $data['resi_house'];
		$personal->resi_street		 	= $data['resi_street'];
		$personal->resi_subdivision 	= $data['resi_subdivision'];
		$personal->resi_barangay	 	= $data['resi_barangay'];
		$personal->resi_city		 	= $data['resi_city'];
		$personal->resi_province	 	= $data['resi_province'];
		$personal->resi_zip			 	= $data['resi_zip'];
		$personal->perma_house		 	= $data['perma_house'];
		$personal->perma_street		 	= $data['perma_street'];
		$personal->perma_subdivision 	= $data['perma_subdivision'];
		$personal->perma_barangay	 	= $data['perma_barangay'];
		$personal->perma_city		 	= $data['perma_city'];
		$personal->perma_province	 	= $data['perma_province'];
		$personal->perma_zip		 	= $data['perma_zip'];
 
		//toast
		Alert::toast('Personal information has been successfully updated.', 'success');

		// save
		$personal->update();

		return redirect()->route('personal.index');
	}	

	public function edit(PersonalInformation $personal)
	{

		return view('personal.edit', compact('personal'));
	}
	public function table(Request $request)
	{

		if ($request->ajax()) {
			$personal = PersonalInformation::select('id', 'first_name', 'last_name', 'sex', 'civil_status', 'created_at');

			return DataTables::of($personal)
				->rawColumns(['action'])
				->addColumn('action', 'personal.table-buttons')
				->editColumn('created_at', function ($personal) {
					return $personal->created_at->format('F d Y');
				})
				->toJson();
		}
	}

	public function destroy(PersonalInformation $personal, Request $request)
	{

		if ($request->ajax()) {
			$personal->delete();
			return response()->json([
				'success' => true,
				'message' => 'Successfully deleted!'
			], Response::HTTP_OK);
		}
		Alert::toast('User has been deleted', 'success');
		$personal->delete();

		return redirect()->route('personal.index');
	}
}
