<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Password;



use App\Models\User;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): View
	{
		// search input
		$searchVal = $request->search;
		// users
		// paginate with query
		$users = User::where('first_name', 'like', '%' . $searchVal . '%')
			->orWhere('last_name', 'like', '%' . $searchVal . '%')
			->orWhere('email', 'like', '%' . $searchVal . '%')
			->orderBy('created_at', 'desc')
			->paginate(100);

		return view('user.index', compact('users', 'searchVal'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreUserRequest $request, User $user)
	{
		$validated = $request->validated();
		
		// validated data

		$user 					= new User;
		$user->first_name 		= $validated['first_name'];
		$user->last_name 		= $validated['last_name'];
		$user->email 			= $validated['email'];
		$user->role 			= $validated['role'];
		$user->status 			= $validated['status'];
		$user->password 		= Hash::make($validated['password']);

		//toast
		Alert::toast('User has been successfully added.', 'success');

		// save
		$user->save();

		return redirect()->route('users.index')->with('status', 'User created!');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(User $user)
	{
		return view('user.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateUserRequest $request, User $user)
	{
		// validated data
		$data = $request->validated();

		// Update User
		$user->first_name 		= $data['first_name'];
		$user->last_name 			= $data['last_name'];
		$user->email 					= $data['email'];
		$user->role 			= $data['role'];
		$user->status 			= $data['status'];


		// optional password updating
		if (isset($data['password'])) {
			$user->password	= $data['password'];
		}

		Alert::toast('User has been successfully updated.', 'success');

		// save
		$user->save();

		// redirection
		return redirect()->route('users.index')->with('status', 'User has been successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Request $request, User $user)
	{
		// delete User
		if ($request->ajax()) {

			$user->delete();
			// Alert::toast('User has been successfully deleted', 'success');
			return response()->json([
				'success' => true,
				'message' => 'User has been successfully deleted'
			]);
		}

		// alert
		Alert::toast('Deleted', 'User has been successfully deleted');

		// redirect to users page
		return redirect()->route('users.index')->with('status', 'User has been successfully deleted.');
	}

	public function table(Request $request)
	{

		if ($request->ajax()) {
			$users = User::select('id', 'first_name', 'last_name', 'email', 'role', 'status', 'created_at')
				->where('id', '!=', auth()->user()->id);

			return DataTables::of($users)
				->addColumn('action', 'user.table-buttons')
				->rawColumns(['status', 'action'])
				->editColumn('status', function ($user) {
					if ($user->status == 'Active') {
						return '<span class="badge bg-success badge-pill">Active</span>';
					} else {
						return '<span class="badge bg-danger badge-pill">Inactive</span>';
					}
				})
				->editColumn('created_at', function ($user) {
					return $user->created_at->format('F d Y');
				})
				->toJson();
		}
	}

	
}
