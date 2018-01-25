<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::with('projects')->all();

        return response()->json([
            'status' => 'success',
            'data' => $accounts,
            'code' => 200,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AccountRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        // todo: validate

        $account = Account::create($request->all());

        if ($account != null)
        {
            return response()->json([
                'status' => 'success',
                'data' => $account,
                'code' => 200
            ]);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Account creation failed.',
                'code' => 400
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Account $account
     * @return \Response
     */
    public function show(Account $account)
    {
        if ($account != null)
        {
            return response()->json([
                'status' => 'success',
                'data' => $account,
                'code' => 200,
            ]);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => "Account not available",
                'code' => 200,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AccountRequest $request
     * @param Account $account
     * @return \Response
     */
    public function update(AccountRequest $request, Account $account)
    {
        // todo: validate

        if ($account != null)
        {
            $accountUpdate = $account->update($request->all());

            if ($accountUpdate)
            {
                return response()->json([
                    'status' => 'success',
                    'data' => $account,
                    'code' => 200,
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => "Account was not updated.",
                    'code' => 400,
                ]);
            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => "Account not found.",
                'code' => 400,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Account $account
     * @return \Response
     * @throws \Exception
     */
    public function destroy(Account $account)
    {
        if ($account != null)
        {
            $deleted = $account->delete();

            if ($deleted)
            {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Account Deleted successfully',
                    'code' => 200
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Account Deleted failed',
                    'code' => 200
                ]);
            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Account not found.',
                'code' => 200
            ]);
        }
    }
}
