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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
