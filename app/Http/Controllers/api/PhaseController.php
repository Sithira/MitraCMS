<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\PhaseRequest;
use App\Models\Phase;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhaseController extends Controller
{
    /**
     * Get all phases.
     *
     * @param Project $project
     * @return \Response
     */
    public function index(Project $project)
    {

        $phases = $project->phases;

        return response()->json([
            'status' => 'success',
            'data' => $phases,
            'code' => 200
        ]);

    }

    /**
     * Add a new phase to the Project
     *
     * @param Project $project
     * @param PhaseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, PhaseRequest $request)
    {

        // todo: validate the request

        if ($project == null)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Project not found',
                'code' => 400
            ], 400);
        }

        // add a new phase to the project.
        $phase = $project->phases()->create($request->all());

        // return the added phase.
        return response()->json([
            'status' => 'success',
            'data' => $phase,
            'code' => 200
        ], 200);
    }

    /**
     * Get details of a specific phase
     *
     * @param Phase $phase
     * @return \Response
     */
    public function show(Phase $phase)
    {

        $data = null;

        if ($phase == null)
        {

            $data = [
                'status' => 'error',
                'message' => 'Phase not found',
                'code' => 400
            ];

            return response()->json($data, $data['code']);
        }

        $data = [
            'status' => 'success',
            'data' => $phase,
            'code' => 200
        ];

        return response()->json($data, $data['code']);
    }


    /**
     * Update a phase
     *
     * @param Project $project
     * @param Phase $phase
     * @param PhaseRequest $request
     * @return \Response
     */
    public function update(Project $project, Phase $phase, PhaseRequest $request)
    {

        // todo: validate.

        $data = null;

        if ($project == null || $phase == null)
        {
            $data = [
                'status' => 'error',
                'message' => 'Project or phase is not found',
                'code' => 400,
            ];

            return response()->json($data, $data['code']);
        }

        $phaseUpdate = $phase->update($request->all());

        if ($phaseUpdate)
        {
            $data = [
                'status' => 'success',
                'data' => $phase,
                'code' => 200,
            ];
        }
        else
        {
            $data = [
                'status' => 'error',
                'data' => 'Phase update failed.',
                'code' => 400,
            ];
        }

        return response()->json($data, $data['code']);
    }

    /**
     * Remove a phase
     *
     * @param Project $project
     * @param Phase $phase
     * @return \Response
     * @throws \Exception
     */
    public function destroy(Project $project, Phase $phase)
    {

        if ($project != null || $phase != null)
        {
            if ($phase != null)
            {
                $phase->delete();

                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Phase delete successfully'
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Project or Phase not found',
            'code' => 400,
        ]);

    }

    public function payForPhase(Project $project, Phase $phase, PhaseRequest $request)
    {

        if ($phase != null)
        {

            $payedPhase = $phase->payments()->create($request->all());

            if ($payedPhase)
            {
                return response()->json([
                    'status' => 'success',
                    'data' => $phase,
                    'code' => 200
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Phase payment failed.',
                    'code' => 400
                ]);
            }

        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Phase not found.',
                'code' => 400
            ]);
        }

    }
}
