<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Get all the users in the database
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();

        return response()->json([
            'status' => 'success',
            'data' => $users
        ], 200);
    }

    /**
     * Add a new user to the database.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        if ($request->ajax())
        {
            return response()->json(true);
        }

        // todo validate

        // make the user with the given data
        $user = User::create($request->all());

        // build the response var.
        $data = null;

        // check for the variable instance
        if ($user == null)
        {
            // build the respective response.
            $data = [
                'status' => 'error',
                'message' => 'user creation failed',
                'code' => 400
            ];
        }
        else
        {
            $data = [
                'status' => 'success',
                'data' => $user,
                'code' => 201
            ];
        }

        // return the response.
        return response()->json($data, $data['code']);
    }

    /**
     * Get all details of a user; in-depth
     *
     * @param $id
     * @return \Response
     */
    public function show($id)
    {

        $user = User::with([
            'roles', 'accounts', 'projects', 'payouts'
        ])->find($id);

        if ($user == null)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found !',
                'code' => 400
            ], 400);
        }
        else
        {
            return response()->json([
                'status' => 'success',
                'data' => $user,
                'code' => 200
            ], 200);
        }
    }

    /**
     * Update a user specified.
     *
     * @description Only HRs and Admins can access this route.
     *
     * @param UserRequest $request
     * @param User $user
     * @return \Response
     */
    public function update(UserRequest $request, User $user)
    {
        if ($user == null)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 400);
        }
        else
        {
            $userUpdate = $user->update($request->all());

            $data = null;

            if ($userUpdate)
            {
                $data = [
                    'status' => 'success',
                    'data' => $user,
                    'code' => 200
                ];
            }
            else
            {
                $data = [
                    'status' => 'success',
                    'message' => 'User couldnt be updated.',
                    'code' => 400
                ];
            }
        }

        return response()->json($data, $data['code']);
    }

    /**
     * Remove a user from a database
     *
     * @description Access is restricted to HRs and Admins
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        if ($user == null)
        {

            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 400);

        }
        else
        {

            $userDeleted = $user->delete();

            if ($userDeleted)
            {
                return response()->json([
                    'status' => 'success',
                    'message' => 'User deleted successfully',
                    'code' => 200
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User deletion failed',
                    'code' => 200
                ]);
            }

        }
    }
}
