<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\AdvertiseResource;
use App\Models\Advertise;
use Illuminate\Http\Request;
use Jiannei\Response\Laravel\Support\Facades\Response;

class AdvertiseController extends Controller
{
    public function index(Request $request)
    {
        $advertise = Advertise::where('country_code', $request->header('Cf-Ipcountry'))
            ->where('status', 1)
            ->where('start_at', '<=', now())
            ->where('end_at', '>=', now())
            ->orderBy('sort', 'desc')
            ->simplePaginate(30);

        return Response::success(AdvertiseResource::collection($advertise));
    }
}
