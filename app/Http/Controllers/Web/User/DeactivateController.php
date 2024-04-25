<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;

class DeactivateController extends Controller
{
    /**
     * Deactivate the specified user.
     */
    public function __invoke(Request $request, User $user)
    {
        
        if ($request->ajax()) {
            $user->status = 'inactive';
            $user->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'User Deactivated',
                ],
                Response::HTTP_OK
            );
        }
    }
}
