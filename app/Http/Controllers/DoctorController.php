<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Http\Resources\Doctor\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Response;

class DoctorController extends Controller
{
    public function index()
    {
       return DoctorResource::collection(Doctor::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $doctor = Doctor::create($data);
        return DoctorResource::make($doctor)->resolve();
    }
    public function show(Doctor $doctor)
    {
        return DoctorResource::make($doctor)->resolve();
    }
    public function update(UpdateRequest $request, Doctor $doctor)
    {
        $data = $request->validated();
        $doctor->update($data);
        $doctor = $doctor->fresh();
        return DoctorResource::make($doctor)->resolve();
    }
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response(Response::HTTP_OK);
    }
}
