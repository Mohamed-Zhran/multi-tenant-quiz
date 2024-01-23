<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TenantController extends Controller
{
    public function index(int $id): JsonResource{
        return UserResource::collection(Tenant::findOrFail($id)->users);
    }
}
