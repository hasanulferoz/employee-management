<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryStoreRequest;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::all();
        $countries = Country::all();
        if ($request->has('search')) {
            $countries = Country::where('name', 'like', "%{$request->search}%")
                ->orWhere('country_code', 'like', "%{$request->search}%")->get();
        }
        return view('layouts.countries.index', compact('countries'));
    }

    public function create()
    {

        return view('layouts.countries.create');
    }

    public function store(CountryStoreRequest $request)
    {
        Country::create($request->validated());

        return redirect()->route('countries.index')->with('message', 'Country created Successfully');
    }

    public function edit(Country $country)
    {
        return view('layouts.countries.edit', compact('country'));
    }

    public function update(CountryStoreRequest $request, Country $country)
    {
        $country->update($request->validated());
        return redirect()->route('countries.index')->with('message', 'Country updated Successfully');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('message', 'Country Updated Successfully');
    }
}
