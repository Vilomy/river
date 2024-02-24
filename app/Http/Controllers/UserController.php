<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        return UserResource::make($user)->resolve();
    }
    public function show(User $user)
    {
        return UserResource::make($user)->resolve();
    }
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        $user = $user->fresh();
        return UserResource::make($user)->resolve();
    }
    public function destroy(User $user)
    {
        $user->delete();
        return response(Response::HTTP_OK);
    }
}
