<?php

namespace App\Http\Controllers;
use App\Http\Requests\Transaction\StoreRequest;
use App\Http\Requests\Transaction\UpdateRequest;
use App\Http\Resources\Transaction\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    public function index()
    {
        return TransactionResource::collection(Transaction::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $transaction = Transaction::create($data);
        return TransactionResource::make($transaction)->resolve();
    }
    public function show(Transaction $transaction)
    {
        return TransactionResource::make($transaction)->resolve();
    }
    public function update(UpdateRequest $request, Transaction $transaction)
    {
        $data = $request->validated();
        $transaction->update($data);
        $transaction = $transaction->fresh();
        return TransactionResource::make($transaction)->resolve();
    }
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return response(Response::HTTP_OK);
    }
}
