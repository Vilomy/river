<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Doctor;
use App\Models\Order;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Doctor::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $order = Order::create($data);
        return OrderResource::make($order)->resolve();
    }
    public function show(Order $order)
    {
        return OrderResource::make($order)->resolve();;
    }
    public function update(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);
        $order = $order->fresh();
        return OrderResource::make($order)->resolve();;
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return response(Response::HTTP_OK);
    }
}
