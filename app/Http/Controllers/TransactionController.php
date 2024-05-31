<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transactions = Transaction::all()->toArray();
        return response()->json($transactions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // This method should return a view for creating a new transaction.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Sede' => 'required',
            'Codigo_sede' => 'required',
            'Ticket' => 'required',
            'Venta' => 'required',
            'Utilidad' => 'required',
            'Porcentaje_c_v' => 'required'
        ]);
        try {
            $requestData = $request->only(['Sede', 'Codigo_sede', 'Ticket', 'Venta', 'Utilidad', 'Porcentaje_c_v']);
            $transaction = Transaction::create($requestData);
            return response()->json(['message' => 'Transaction created successfully', 'transaction' => $transaction], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating transaction', 'error' => $e->getMessage()], 500);
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        return response()->json($transaction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // This method should return a view for editing a transaction.
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
        $request->validate([
            'Id' => 'required',
            'Sede' => 'required',
            'Codigo_sede' => 'required',
            'Ticket' => 'required',
            'Venta' => 'required',
            'Utilidad' => 'required',
            'Porcentaje_c_v' => 'required',
        ]);
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
        $transaction->update($request->all());
        return response()->json(['message' => 'Transaction updated successfully', 'transaction' => $transaction]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaction->delete();

        return response()->json(['message' => 'Transaction deleted successfully']);
    }
}
