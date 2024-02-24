<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $profile = Profile::created($data);
        return ProfileResource::make($profile)->resolve();
    }
    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }
    public function update(UpdateRequest $request, Profile $profile)
    {
        $data = $request->validated();
        $profile->update($data);
        $profile = $profile->fresh();
        return ProfileResource::make($profile)->resolve();
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response(Response::HTTP_OK);
    }
}
