<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Auth;
use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    /**
     * Get all projects belong to the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Auth::user()
            ->projects;

        return response()->json([
            'status' => 'success',
            'data' => $projects
        ]);
    }

    /**
     * Add a new project.
     *
     * @param ProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        // todo validate

        // make the project with the given data
        $project = Project::create($request->all());

        // build the response var.
        $data = null;

        // check for the variable instance
        if ($project == null)
        {
            // build the respective response.
            $data = [
                'status' => 'error',
                'message' => 'Project creation failed',
                'code' => 400
            ];
        }
        else
        {
            $data = [
                'status' => 'success',
                'data' => $project,
                'code' => 200
            ];
        }

        // return the response.
        return response()->json($data, $data['code']);
    }

    /**
     * Get a single project
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // get the projects only belongs to the logged in user.
        $project = Auth::user()
            ->projects // relationship via the logged in user.
            ->where('id', $id) // filter it by the id, [ collection instance ]
            ->first(); // grab the first object; if we have any.

        $data = null;

        if ($project == null)
        {
            $data = [
                'status' => 'error',
                'message' => 'Project not found',
                'code' => 400
            ];
        }
        else
        {
            $data = [
                'status' => 'success',
                'data' => $project,
                'code' => 200
            ];
        }

        return response()->json($data, $data['code']);
    }

    /**
     * Update the project details
     *
     * @param ProjectRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        //todo: access check and validation.

        // request validation.
        $validator = Validator::make($request->all(), []);

        // if validator fails, throw the error.
        if ($validator->fails())
        {
            // build the response.
            return response()->json([
                'status' => 'error',
                'message' => $validator->failed(),
                'code' => 400
            ]);
        }

        // get the project details.
        $project = Auth::user()
            ->projects
            ->where('id', $id)
            ->first();

        // make the data array.
        $data = null;

        // check for project instance nullability
        if ($project == null)
        {
            $data = [
                'status' => 'error',
                'message' => 'Project not found',
                'code' => 400
            ];
        }
        else
        {
            $data = [
                'status' => 'success',
                'data' => $project,
                'code' => 200
            ];
        }

        // return the json response.
        return response()->json($data, $data['code']);

    }

    /**
     * Delete the project
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get the project
        $project = Auth::user()
            ->projects
            ->where('id', $id)
            ->first();

        $data = null;

        if ($project == null)
        {

            // build the data
            $data = [
                'status' => 'error',
                'code' => 400,
                'message' => 'Project not available'
            ];

        }
        else
        {
            $data = [
                'status' => 'success',
                'code' => 200,
                'message' => "project and it's assets have been removed."
            ];
        }

        // return the response.
        return response()->json($data, $data['code']);
    }

}
