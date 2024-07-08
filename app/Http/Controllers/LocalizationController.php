<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index()
    {
        $data = ['uz_Latn', 'ru'];
        return response()->json([
            "data" => app()->getLocale(),
        ]);
    }
    public function setLocale(Request $request)
    {
        app()->setLocale($request->input('lang'));

        return response()->json([
            'status' => 'success',
            'data' => app()->getLocale()
        ]);
    }
}
