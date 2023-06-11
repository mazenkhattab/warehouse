<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = car::all();

        return  $cars;
    }

    public function show($id)
    {
        $car = car::find($id);
        return $car;
    }

    public function destroy($id){
        $car =car::destroy($id);
        return response()->json(["message" => "car has been deleted successfully"]);
}
    

    
    public function store(Request $request){
        $validator = $request->validate([
            'model'=>['required','unique:cars','min:3'],
            'color'=>['required','min:3'],
            'quantity'=>['required','gt:0']
        ]);
        $car = car::create($validator);
        return response()->json(["message" => "car has been created successfully"]);

    }
    public function update(Request $request ,$id){
        $validator = $request->validate([
            'model'=>['required','unique:cars','min:3'],
            'color'=>['required','min:3'],
            'quantity'=>['required','gt:0']
        ]);
        $car = car::whereId($id)->update($validator);
        return response()->json(["message" => "car has been updated successfully"]);

        
    }
}
