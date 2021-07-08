<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeDataController extends Controller
{
    public function countries()
    {
        $countries = Country::all();

        return response()->json($countries);
    }
}
