<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvertiseResource;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function index()
    {
        $advertise = Advertise::paginate(30);
        return AdvertiseResource::collection($advertise);
    }
}
