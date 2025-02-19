<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OfficeController extends Controller
{
    public function index(): JsonResponse
    {
        $offices = Office::orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Get all office',
            'data' => $offices
        ]);
    }

    public function show(Office $office): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Get detail office',
            'data' => $office
        ]);
    }
}
