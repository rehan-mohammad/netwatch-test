<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }


    public function query(Request $request)
    {

        if(!isset($request->make) && !isset($request->model) && !isset($request->registration)) {
            //If there is no input, return all vehicles
            $vehicleResult = Vehicle::all();
        }
        else {
            //Return vehicles matching search inputs, regardless of which input is populated
            $vehicleResult = Vehicle::
            when($request->make, function($query, $make){
                $query->where('make', 'like', '%'.$make.'%');
            })->when($request->model, function($query, $model){
                $query->where('model', 'like', '%'.$model.'%');
            })->when($request->registration, function($query, $registration){
                $query->where('registration', 'like', '%'.$registration.'%');
            })->get();
        }


        return view('search.results', [
            'results' => $vehicleResult
        ]);
    }
}
