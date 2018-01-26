<?php

namespace App\Http\Controllers\api;

use App\Models\Payment;
use App\Models\Phase;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PayoutsController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Payment $payout
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Payment $payout)
    {
        $data = null;

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
     * Remove the specified resource from storage.
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
            $data = [
                'status' => 'success',
                'code' => 200,
                'message' => "Payout removed."
            ];
        }

        // return the response.
        return response()->json($data, $data['code']);
    }
}
