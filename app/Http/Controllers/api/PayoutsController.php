<?php

namespace App\Http\Controllers\api;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PayoutsController extends Controller
{
    /**
     * Get all payouts belong to the user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payouts = Auth::user()
            ->payouts;

        return response()->json([
            'status' => 'success',
            'data' => $payouts
        ]);
    }

    /**
     * Add a new payout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //make the payout with the given data
        $payout = Payment::create($request->all());

        $data = null;

        if($payout == null)
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
                'data' => $payout,
                'code' => 200
            ];
        }

        return response()->json($data, $data['code']);
    }

    /**
     * Get a single payout
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get the payments belongs to the User
        $payout = Auth::user()
            ->payouts
            ->where('id',$id)
            ->first();

        $data = null;

        if($payout == null)
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
                'data' => $payout,
                'code' => 200
            ];
        }

        return response()->json($data,$data['code']);
    }

    /**
     * Update the payout details
     *
     * @param PayoutRequest|Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(PayoutRequest $request, $id)
    {
        //get the payout details
        $payout = Auth::user()
            ->payouts
            ->where('id',$id)
            ->first();

        $data = null;

        //check for project instance nullability
        if($payout == null)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Payment not found',
                'code' => 400
            ]);
        }
        else
        {
            $payoutUpdate = $payout->update($request->all());

            $data = null;

            if ($payoutUpdate)
            {
                $data = [
                    'status' => 'success',
                    'data' => $payout,
                    'code' => 200
                ];
            }
            else
            {
                $data = [
                    'status' => 'success',
                    'message' => 'Payment couldnt be updated.',
                    'code' => 400
                ];
            }
        }

        return response()->json($data, $data['code']);
    }

    /**
     * Remove the payout
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payout = Auth::user()
            ->payout
            ->where('id',$id)
            ->first();

        $data = null;

        if ($payout == null)
        {

            // build the data
            $data = [
                'status' => 'error',
                'code' => 400,
                'message' => 'Payout not available'
            ];

        }
        else
        {
            $payoutDeleted = $payout->delete();

            if($payoutDeleted)
            {
                $data = [
                    'status' => 'success',
                    'code' => 200,
                    'message' => "Payout removed."
                ];
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'code' => 400,
                    'message' => "Payout cannot be removed."
                ]);
            }
        }

        // return the response.
        return response()->json($data, $data['code']);
    }
}
