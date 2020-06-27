<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $province = \App\Province::all();
        return view('page', compact('province'));   
    }

    public function getCity(Request $request)
    {
        $city = \App\City::where('province_id', $request->wil_id)
        ->pluck('name','id');
        return response()->json($city);
    }

    public function getDistrict(Request $request)
    {
        $district = \App\District::where('city_id', $request->wil_id)
        ->pluck('name','id');
        return response()->json($district);
    }

    public function province(Request $request)
    {
        $province = \App\Province::where('id', $request->wil_id)
        ->pluck('name', 'id');
        return response()->json($province);
    }

    public function city(Request $request)
    {
        $city = \App\City::where('id', $request->wil_id)
        ->pluck('name', 'id');
        return response()->json($city);
    }

    public function district(Request $request)
    {
        $district = \App\District::where('id', $request->wil_id)
        ->pluck('name', 'id');
        return response()->json($district);
    }

}
