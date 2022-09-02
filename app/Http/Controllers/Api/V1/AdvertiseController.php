<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\AdvertiseResource;
use App\Models\Advertise;
use Illuminate\Http\Request;
use Jiannei\Response\Laravel\Support\Facades\Response;

class AdvertiseController extends Controller
{
    public function index()
    {
        $advertise = Advertise::paginate(30);
        return Response::success(AdvertiseResource::collection($advertise));
    }
}
