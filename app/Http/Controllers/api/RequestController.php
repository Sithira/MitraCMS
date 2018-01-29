<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function index(Project $project)
    {

        if ($project != null)
        {

            $projectRequests = $project->requests;

                return response()
                    ->json([
                        'status' => 'success',
                        'data' => $projectRequests,
                        'code' => 200
                    ], 200);
        }
        else
        {

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Project not found',
                    'code' => 400
                ], 400);

        }

    }

    public function store(Request $request, Project $project)
    {
        $this->validate($request, [
            'request' => 'request'
        ]);

        if ($project == null)
        {

            return response()
                ->json([
                    'status' => 'error',
                    'message' => 'Project not found'
                ]);

        }
        else
        {

            $req = $project->requests()->create($request->all());

            if ($req == null)
            {
                return response()->json([
                    'status' => 'success',
                    'data' => $req,
                    'code' => 201
                ], 201);
            }

            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Error occurred while trying to make a new request',
                    'code' => 400
                ], 400
            );

        }

    }

    public function show(Project $project, \App\Models\Request $request)
    {

        if ($request != null)
        {
            return response()->json([
                'status' => 'success',
                'data' => $request,
                'code' => 200
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Project request not found',
                'code' => 400
            ], 400);
        }

    }

    public function destroy(\App\Models\Request $request)
    {
        if ($request != null)
        {
            $request->delete();

            return response()->json([
                'status' => 'success',
                'message' => "Request removed successfully",
                'code' => 200
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Project request not found',
                'code' => 400
            ], 400);
        }
    }

}
